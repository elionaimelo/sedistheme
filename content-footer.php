<footer id="footer">
      <div class="container">
        <div class="row">
            <div class="col-md-3">
              <?php
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  if ( has_custom_logo() ) {
                          echo '<img src="'. esc_url( $logo[0] ) .'">';
                  } else {
                          echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                  }
              ?>
            </div>
            <div class="col-md-8">
              <nav>
                <?php
                  wp_nav_menu(
                    array(
                      'theme_location' => 'menu_rodape',
                      'depth'          => 2,
                      'container'      => false,
                      'menu_class'     => 'list-unstyled list-inline',
                      'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
                      'walker'         => new Odin_Bootstrap_Nav_Walker()
                    )
                  );
                ?>
              </nav>
            </div>
            <div class="col-md-1">
              <!-- <a href="http://"><span class="social_facebook_square soci"></span></a>
              <a href="http://"><span class=" social_youtube_square soci"></span></a> -->
              <?php if( dynamic_sidebar('widget-3') ) : ?>
              <?php endif;  ?>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-12">
            <p class="copyright">SEDIS - UFRN - Campus Universitário - Praça Cívica - Natal/RN - CEP 59.078-970</p>
          </div>
        </div>
      </div>
    </footer>