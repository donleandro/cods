<?php
/**
 * cds functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cds
 */

if ( ! function_exists( 'cds_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cds_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cds, use a find and replace
		 * to change 'cds' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cds', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cds' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cds_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cds_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cds_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cds_content_width', 640 );
}
add_action( 'after_setup_theme', 'cds_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cds_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cds' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cds' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cds_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cds_scripts() {
	wp_enqueue_style( 'cds-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cds-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '20171113', false );

	wp_enqueue_script( 'cds-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cds-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cds_scripts' );

function add_scriptfilter( $string ) {
	global $allowedtags;
	$allowedtags['script'] = array( 'src' => array () );
	return $string;
}
add_filter( 'pre_kses', 'add_scriptfilter' );

add_action( 'wp_ajax_load_search_results', 'load_search_results' );
add_action( 'wp_ajax_nopriv_load_search_results', 'load_search_results' );

function load_search_results() {
	$query = $_POST['query'];
	$content = array();
	$content['general'] = array();

	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'category__not_in' => array( 19, 20 ),
		's' => $query
	);

	$search = new WP_Query( $args );

	if ( $search->have_posts() ) :

			while ( $search->have_posts() ) : $search->the_post();
				$new_post = array(
					'title' => get_the_title(),
					'link' => get_permalink(),
					'excerpt' => get_the_excerpt(),
					'date' => get_the_time('F j, Y'),
					'color' => get_field('color_ods')
				);
				array_push( $content['general'] , $new_post);
			endwhile;

	else :
		$content['general'] = array();
	endif;

	echo json_encode($content);
	die();

}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
            if (is_single()) {
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp; Resultados para... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

/*
<li id="link_red">
	<a href="/red" >RED</a>
</li>
*/
function add_last_nav_item($items) {
  return $items .= '
  				<li id="link_newsletter">
  				<a href="#" >NEWSLETTER</a>
  				</li>
 				<li>
				<a href="https://twitter.com/centroods?lang=es" target="_blank" class="redes_links">
			  	<img src="'. get_template_directory_uri() .'/images/tw.svg"></a></li>

				<a href="/"  class="logo_menu" >
			  	<img src="'. get_template_directory_uri() .'/images/logo_ch.svg"></a>
			  	';
}
add_filter('wp_nav_menu_items','add_last_nav_item');


function my_postit() {
    $imagen = get_field('imagen_postit');
    $texto = get_field('texto_postit',false,false);
    $link_postit = get_field('link_postit',false,false);

  $link_postit_box = '<div class="postit"> <img src="'.$imagen.'" /> <div>'.$texto.'</div>  <a href="'.$link_postit.'" target="_blank" class="">Click para ver más</a></div>';
    return $link_postit_box;
}
add_shortcode( 'postit', 'my_postit' );
