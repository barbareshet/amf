<?php
/**
 * amf functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package amf
 */

if ( ! function_exists( 'amf_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function amf_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on amf, use a find and replace
	 * to change 'amf' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'amf', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'amf' ),
		'secondary' => esc_html__( 'Secondary', 'amf' ),
		'footer' => esc_html__( 'Footer', 'amf' ),
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
	/*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
	add_theme_support('post-formats', array());
	add_image_size('hero-image', 1920, 500, true);
	add_image_size('top-image-pages', 1920, 500, true);
	add_image_size('service-image', 250, 250, true);
	add_image_size('blog-post', 555, 370, true);
	add_image_size('single-post', 1920, 554, true);


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'amf_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'amf_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function amf_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'amf_content_width', 640 );
}
add_action( 'after_setup_theme', 'amf_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function amf_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'amf' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'amf' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'amf' ),
        'id'            => 'sidebar-blog',
        'description'   => esc_html__( 'Blog Sidebar.', 'amf' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
	register_sidebar(array(
		'name' => esc_html__('Footer widgets 1', 'amf'),
		'id' => 'footer-1',
		'description' => '',
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'name' => esc_html__('Footer widgets 2', 'amf'),
		'id' => 'footer-2',
		'description' => '',
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
    register_sidebar(array(
		'name' => esc_html__('Footer widgets 3', 'amf'),
		'id' => 'footer-3',
		'description' => '',
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
    register_sidebar(array(
		'name' => esc_html__('Footer widgets 4', 'amf'),
		'id' => 'footer-4',
		'description' => '',
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
}
add_action( 'widgets_init', 'amf_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function amf_scripts() {

	//Normalize
	wp_enqueue_style('amf-normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css', [], microtime());
	//bootstrap
	wp_enqueue_style('amf-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', [], microtime());

	//jansy-bootstrap
	wp_enqueue_style('amf-jansy-bootstrap-style', get_stylesheet_directory_uri() . '/assets/css/jasny-bootstrap.min.css', [], microtime());

	//fontawesome
	wp_enqueue_style('amf-fontawesome', get_stylesheet_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', [], microtime());
	wp_enqueue_style( 'amf-style', get_stylesheet_uri() );


	//bootstrap scripts
	wp_enqueue_script('amf-bootstrap-script', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), microtime(), true);
	//jasny-bootstrap
	wp_enqueue_script('amf-jasny-bootstrap-script', get_stylesheet_directory_uri() . '/assets/js/jasny-bootstrap.min.js', array('jquery'), microtime(), true);
	//readmore.js
    wp_enqueue_script('amf-readmore-script', get_stylesheet_directory_uri() . '/assets/js/readmore.min.js', array('jquery'), microtime(), true);
    // masonry.js
    wp_enqueue_script('amf-masonry-script', get_stylesheet_directory_uri() . '/assets/js/masonry.min.js', array('jquery'), microtime(), true);
    //ajax-pagination
    wp_enqueue_script( 'ajax-pagination',  get_stylesheet_directory_uri() . '/assets/js/ajax-pagination.js', array( 'jquery' ), microtime(), true );
    global $wp_query;
    wp_localize_script( 'ajax-pagination', 'ajaxpagination', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'query_vars' => json_encode( $wp_query->query )
    ));

    //main theme js
	wp_enqueue_script('amf-main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), microtime(), true);
	wp_enqueue_script( 'amf-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'amf-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amf_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function themeInit()
{
	/**
	 * hide the admin bar
	 */
//	add_filter('show_admin_bar', '__return_false');

	/**
	 * ACF setup
	 */
	// 1. customize ACF path
	add_filter('acf/settings/path', 'my_acf_settings_path');
	function my_acf_settings_path($path)
	{
		$path = get_template_directory() . '/inc/plugins/acf/';
		return $path;
	}

	// 2. customize ACF dir
	add_filter('acf/settings/dir', 'my_acf_settings_dir');
	function my_acf_settings_dir($dir)
	{
		$dir = get_stylesheet_directory_uri() . '/inc/plugins/acf/';
		return $dir;
	}

	// 3. Hide ACF field group menu item
	//add_filter('acf/settings/show_admin', '__return_false');

	// 4. Include ACF
	include_once(get_template_directory() . '/inc/plugins/acf/acf.php');

	if (function_exists('acf_add_options_page')) {
		acf_add_options_page(array(
			'page_title' => __('Theme Options', 'amf'),
			'menu_title' => __('Theme Options', 'amf'),
			'menu_slug' => __('theme-options', 'amf')
		));
	}

	add_filter('acf/settings/save_json', 'my_acf_json_save_point');
	function my_acf_json_save_point($path)
	{
		$path = get_template_directory() . '/inc/plugins/acf_json';

		return $path;
	}

	add_filter('acf/settings/load_json', 'my_acf_json_load_point');

	function my_acf_json_load_point($paths)
	{
		unset($paths[0]);
		$paths[] = get_stylesheet_directory() . '/inc/plugins/acf_json';
		//wp_die(var_dump($paths));
		return $paths;
	}

	//acf fields and options
	include_once(get_template_directory() . '/inc/plugins/acf-repeater-editor-accordion/acf-repeater-accordion.php');
	include_once(get_template_directory() . '/inc/plugins/sliders-fields/acf-sliders.php');
}

themeInit();

/**
 * Custom Post Types.
 */
require get_template_directory() . '/inc/post_types/services_post_type.php';
require get_template_directory() . '/inc/post_types/testimonials_post_type.php';
require get_template_directory() . '/inc/post_types/video_post_type.php';

function my_ajax_pagination() {
    $query_vars = json_decode( stripslashes( $_POST['query_vars'] ), true );

    $query_vars['paged'] = $_POST['page'];


    $posts = new WP_Query( $query_vars );
    $GLOBALS['wp_query'] = $posts;

    add_filter( 'editor_max_image_size', 'my_image_size_override' );

    if( ! $posts->have_posts() ) {
        get_template_part( 'content', 'none' );
    }
    else {
        while ( $posts->have_posts() ) {
            $posts->the_post();
            get_template_part( 'content', get_post_format() );
        }
    }
    remove_filter( 'editor_max_image_size', 'my_image_size_override' );

    die();
}

add_action( 'wp_ajax_nopriv_ajax_pagination', 'my_ajax_pagination' );
add_action( 'wp_ajax_ajax_pagination', 'my_ajax_pagination' );

function my_image_size_override() {
    return array( 825, 510 );
}

add_action( 'wp_ajax_nopriv_ajax_pagination', 'my_ajax_pagination' );
add_action( 'wp_ajax_ajax_pagination', 'my_ajax_pagination' );


//gallery changes
add_filter('post_gallery', 'ct_post_gallery', 10, 2);
function ct_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'medium',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array(
            'include' => $include,
            'post_status' => 'inherit',
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'order' => $order,
            'orderby' => $orderby));

        $attachments = array();
        $count = 1;
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    // Here's your actual output, you may customize it to your need
    $output = "<div class=\"grid\">\n";
//    $output .= "<div class=\"preloader\"></div>\n";
//    $output .= "<ul data-orbit>\n";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        $count++;

//        $sizer = '';
//        if($count == 1){
//            $sizer = 'grid-sizer';
//        }
        $dim = 'grid-item--width';
        if($count % 2 == 0){
            $dim = 'grid-item--height';
//            return $dim;
        }
        if($count==5){ $count=1; }
        // Fetch the thumbnail (or full image, it's up to you)
      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');

        $output .= "<div>\n";
        $output .= "<img src=\"{$img[0]}\" alt=\"\" class=\"grid-item {$dim}{$count}\"/>\n";
        $output .= "</div>\n";
    }

//    $output .= "</ul>\n";

    $output .= "</div>\n";

    return $output;
}