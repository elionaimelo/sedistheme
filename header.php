<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width">
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="google-site-verification" content="EZWhVsfg_SiXyOKt0W29k0vG7Ltwd2jsdGCO0n8KvyE" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">

	<?php wp_head(); ?>
	
</head>
<body <?php body_class('sidebar-collapse'); ?>>

<nav id="menu-adm" class="navbar navbar-expand-lg navbar-dark fixed-top bg-white">
      <div class="container-fluid">
        <div class="navbar-translate">
          <a class="navbar-brand" href="<?php echo get_option("siteurl"); ?>">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                        echo '<img src="'. esc_url( $logo[0] ) .'">';
                } else {
                        echo '<h3>'. get_bloginfo( 'name' ) .'</h3>';
                }
            ?>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-info" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-info" data-nav-image="<?php echo get_template_directory_uri(); ?>/images/blurred-image-1.jpg">

          <?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'navbar-nav ml-auto',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
          ?>
          <?php get_template_part( 'searchform1' ); ?>

          <?php include('botao-webmail.php'); ?>
        </div>
      </div>
    </nav>

    <div class="wrapper">

