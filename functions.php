<?php 

// Incluindo nosso arquivo customizer
// require get_template_directory() . '/inc/customizer.php';

remove_action('wp_head','wp_generator');


if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "https://code.jquery.com/jquery-2.2.4.min.js", false, null);
   wp_enqueue_script('jquery');
}


// Função para carregamento dos scripts
function carrega_scripts(){
	// Enfileirando Bootstrap
	
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3', 'all');
    
    // wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), null, true);
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js', array(), null, true);
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array(), null, true);	
	wp_enqueue_script( 'bootstrap-switch', get_template_directory_uri().  '/js/bootstrap-switch.js', array(), null, true);	
	wp_enqueue_script( 'nouislider', get_template_directory_uri(). '/js/nouislider.min.js', array(), null, true);	
	wp_enqueue_script( 'now-ui-kit', get_template_directory_uri(). '/js/now-ui-kit.js?v=1.2.0', array(), null, true);	
	wp_enqueue_script( 'scroll-reveal', 'https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js', array(), null, true);	
	wp_enqueue_script( 'smooth-scroll', 'https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js', array(), null, true);	

		// Enfileirando estilos e scripts próprios
		wp_enqueue_style( 'sedis', get_stylesheet_uri() );
    wp_enqueue_style( 'now-ui-kit', get_template_directory_uri() . '/css/now-ui-kit.css', array(), '1.0', 'all');
    wp_enqueue_style( 'pe-icon-7-stroke', get_template_directory_uri() . '/css/Pe-icon-7-stroke.css', array(), '1.0', 'all');
    wp_enqueue_style( 'linea_basic', get_template_directory_uri() . '/css/linea_basic_font.css', array(), '1.0', 'all');
    wp_enqueue_style( 'elegant-icons', get_template_directory_uri() . '/css/elegant-icons.css', array(), '1.0', 'all');
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
	
    
    
	wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);	
}
add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

// Função para registro de nossos menus
register_nav_menus(
	array(
		'main-menu' => __( 'Main Menu'),
		'menu_rodape' => 'Menu Rodapé'
	)
);

// Adicionando suporte ao tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));
add_theme_support('html5', array('search-form'));


function sedis_custom_logo_setup() {
	$defaults = array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'sedis_custom_logo_setup' );


require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

function sedis_widgets_init() {

	register_sidebar(
		array(
			'name'		=> 'Sidebar',
			'id'		=> 'sidebar-1',
			'before_widget'	=> '<div class="sidebar1">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h5 class="sidebar-titulo">',
			'after_title'	=> '</h5>',			
		)
	);


	register_sidebar( array(
		'name'          => esc_html__( 'Sobre', 'sedis' ),
		'id'            => 'widget-1',
		'description'   => esc_html__( 'Widget sobre', 'sedis' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Video apresentação', 'sedis' ),
		'id'            => 'widget-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Redes sociais', 'sedis' ),
		'id'            => 'widget-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Materiais de educação e comunição', 'sedis' ),
		'id'            => 'widget-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Localização da sedis', 'sedis' ),
		'description'   => esc_html__( 'Insira o endereço do google maps e use a class="embed-responsive-item" na tag <iframe>', 'sedis' ),
		'id'            => 'widget-5',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Telefone de contato', 'sedis' ),
		'id'            => 'widget-6',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	));
	
	
}

add_action( 'widgets_init', 'sedis_widgets_init' );

function wp_custom_breadcrumbs() {
 
	$showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
	$delimiter = '<span class="delimitador">/</span>'; // delimiter between crumbs
	$home = 'Home'; // text for the 'Home' link
	$showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
	$before = '<span class="current">'; // tag before the current crumb
	$after = '</span>'; // tag after the current crumb
   
	global $post;
	$homeLink = get_bloginfo('url');
   
	if (is_home() || is_front_page()) {
   
	  if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
   
	} else {
   
	  echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
   
	  if ( is_category() ) {
		$thisCat = get_category(get_query_var('cat'), false);
		if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
		echo $before . '"' . single_cat_title('', false) . '"' . $after;
   
	  } elseif ( is_search() ) {
		echo $before . '"' . get_search_query() . '"' . $after;
   
	  } elseif ( is_day() ) {
		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
		echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
		echo $before . get_the_time('d') . $after;
   
	  } elseif ( is_month() ) {
		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
		echo $before . get_the_time('F') . $after;
   
	  } elseif ( is_year() ) {
		echo $before . get_the_time('Y') . $after;
   
	  } elseif ( is_single() && !is_attachment() ) {
		if ( get_post_type() != 'post' ) {
		  $post_type = get_post_type_object(get_post_type());
		  $slug = $post_type->rewrite;
		  echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
		  if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
		} else {
		  $cat = get_the_category(); $cat = $cat[0];
		  $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
		  if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
		  echo $cats;
		  if ($showCurrent == 1) echo $before . get_the_title() . $after;
		}
   
	  } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
		$post_type = get_post_type_object(get_post_type());
		echo $before . $post_type->labels->singular_name . $after;
   
	  } elseif ( is_attachment() ) {
		$parent = get_post($post->post_parent);
		$cat = get_the_category($parent->ID); $cat = $cat[0];
		echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
		echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
		if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
   
	  } elseif ( is_page() && !$post->post_parent ) {
		if ($showCurrent == 1) echo $before . get_the_title() . $after;
   
	  } elseif ( is_page() && $post->post_parent ) {
		$parent_id  = $post->post_parent;
		$breadcrumbs = array();
		while ($parent_id) {
		  $page = get_page($parent_id);
		  $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
		  $parent_id  = $page->post_parent;
		}
		$breadcrumbs = array_reverse($breadcrumbs);
		for ($i = 0; $i < count($breadcrumbs); $i++) {
		  echo $breadcrumbs[$i];
		  if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
		}
		if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
   
	  } elseif ( is_tag() ) {
		echo $before . 'Tag "' . single_tag_title('', false) . '"' . $after;
   
	  } elseif ( is_author() ) {
		 global $author;
		$userdata = get_userdata($author);
		echo $before . '' . $userdata->display_name . $after;
   
	  } elseif ( is_404() ) {
		echo $before . 'Error 404' . $after;
	  }
   
	  if ( get_query_var('paged') ) {
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
		echo __('Page') . ' ' . get_query_var('paged');
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
	  }
   
	  echo '</div>';
   
	}
  } // end wp_custom_breadcrumbs()

	if ( !function_exists( 'wpex_pagination' ) ) {
	
		function wpex_pagination() {
			
			$prev_arrow = is_rtl() ? '>' : '<';
			$next_arrow = is_rtl() ? '<' : '>';
			
			global $wp_query;
			$total = $wp_query->max_num_pages;
			$big = 999999999; // need an unlikely integer
			if( $total > 1 )  {
				 if( !$current_page = get_query_var('paged') )
					 $current_page = 1;
				 if( get_option('permalink_structure') ) {
					 $format = 'page/%#%/';
				 } else {
					 $format = '&paged=%#%';
				 }
				echo paginate_links(array(
					'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'		=> $format,
					'current'		=> max( 1, get_query_var('paged') ),
					'total' 		=> $total,
					'mid_size'		=> 3,
					'type' 			=> 'list',
					'prev_text'		=> $prev_arrow,
					'next_text'		=> $next_arrow,
				 ) );
			}
		}
	}


	// if ( !function_exists( 'polylang' ) ) {
	// 		//tradução para o tema
	// 		add_action('init', function() {
	// 			pll_register_string('saiba-mais', 'Saiba mais');
	// 			pll_register_string('titulo-sobre', 'Sobre');
	// 			pll_register_string('txt-ambientes-virtuais', 'Ambientes virtuais de aprendizagem');
	// 			pll_register_string('title-concursos', 'Últimos editais e concursos');
	// 			pll_register_string('title-contato', 'Contato');
	// 			pll_register_string('txt-postado', 'Postado em:');
	// 			pll_register_string('titulo-portfolio', 'Portfólio');
	// 			pll_register_string('titulo-materiais', 'Materiais de educação e comunicação');
	// 			pll_register_string('titulo-noticias', 'Notícias');
	// 			pll_register_string('txt-polos', 'Polos de apoio');
	// 			pll_register_string('txt-cursos', 'Cursos');
	// 			pll_register_string('txt-duvidas-frequentes', 'Dúvidas frequentes');
	// 			pll_register_string('txt-categoria', 'Categoria');
	// 			pll_register_string('placeholder-pesquisar', 'Pesquisar');
	// 			pll_register_string('txt-localizacao', 'Localização');
	// 			pll_register_string('txt-servico', 'Serviço');
	// 		});
	// 	}

	function strings_poly() {
					pll_register_string('saiba-mais', 'Saiba mais');
					pll_register_string('titulo-sobre', 'Sobre');
					pll_register_string('txt-ambientes-virtuais', 'Ambientes virtuais de aprendizagem');
					pll_register_string('title-concursos', 'Últimos editais e concursos');
					pll_register_string('title-contato', 'Contato');
					pll_register_string('txt-postado', 'Postado em:');
					pll_register_string('titulo-portfolio', 'Portfólio');
					pll_register_string('titulo-materiais', 'Materiais de educação e comunicação');
					pll_register_string('titulo-noticias', 'Notícias');
					pll_register_string('txt-polos', 'Polos de apoio');
					pll_register_string('txt-cursos', 'Cursos');
					pll_register_string('txt-duvidas-frequentes', 'Dúvidas frequentes');
					pll_register_string('txt-categoria', 'Categoria');
					pll_register_string('placeholder-pesquisar', 'Pesquisar');
					pll_register_string('txt-localizacao', 'Localização');
					pll_register_string('txt-servico', 'Serviço');
	}

	if ( function_exists( 'polylang' ) ) {
		add_action( 'init', 'strings_poly' );
	}
	



	
	