<?php
/**
 * Building functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Building
 */

if ( ! function_exists( 'building_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function building_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Building, use a find and replace
		 * to change 'building' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'building', get_template_directory() . '/languages' );

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
		add_image_size( 'post-thumb-70-70', 70, 70, true );
		add_image_size( 'post-thumb-96-96', 96, 96, true );
		add_image_size( 'post-thumb-364-248', 364, 248, true );
		add_image_size( 'post-thumb-364-250', 364, 250, true );
		add_image_size( 'post-thumb-376-250', 376, 250, true );
		add_image_size( 'post-thumb-850-560', 850, 560, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-header' => esc_html__( 'Menu Header', 'building' ),
			'menu-mobile' => esc_html__( 'Menu Mobile', 'building' ),
			'menu-servic' => esc_html__( 'Menu Servis', 'building' ),
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
		add_theme_support( 'custom-background', apply_filters( 'building_custom_background_args', array(
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
			'height'      => 73,
			'width'       => 161,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'building_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function building_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'building_content_width', 640 );
}
add_action( 'after_setup_theme', 'building_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function building_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'building' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'building' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'building_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function building_scripts() {
	// wp_enqueue_style( 'building-style', get_stylesheet_uri() );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', null, true);
	wp_enqueue_script( 'user_script', get_template_directory_uri() . '/js/script.js', 'jquery', null, true);
	// wp_enqueue_script( 'mail_script', get_template_directory_uri() . '/mail.js', 'jquery', null, true);
	// wp_enqueue_script( 'recaptcha', 'https://www.google.com/recaptcha/api.js', null, true);	

	wp_enqueue_script( 'building-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'building-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


add_action( 'wp_enqueue_scripts', 'building_scripts' );

add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

add_filter('show_admin_bar', '__return_false'); // отключить admin_bar

 //filter for menu header to change class by li
//  add_filter( 'nav_menu_css_class', 'filter_function_name_8591', 10, 4 );

function filter_function_name_8591( $classes, $item, $args, $depth ){
	// filter...
	return 		$classes = [ 'block_menu-link', 'w-inline-block' ];
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
// register custom blog type 
add_action('init', 'my_custom_project');
function my_custom_project(){
	register_post_type('project', array(
		'labels'             => array(
			'name'               => __('Project'), // Основное название типа записи
			'singular_name'      => __('Project'), // отдельное название записи типа Book
			'add_new'            => 'Add new ',
			'add_new_item'       => 'Add new project',
			'edit_item'          => 'Edit project',
			'new_item'           => 'New project',
			'view_item'          => 'Show project',
			'search_items'       => 'Find project',
			'not_found'          =>  'Do not have a project',
			'not_found_in_trash' => 'Do not have a project on a cart',
			'parent_item_colon'  => '',
			'menu_name'          => 'Project'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'menu_icon'					 => 'dashicons-admin-multisite',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => '21',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}

// хук, через который подключается функция
// регистрирующая новые таксономии (create_project_taxonomies)
add_action( 'init', 'create_project_taxonomies' );

// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function create_project_taxonomies(){

	// Добавляем древовидную таксономию 'genre' (как категории)
	register_taxonomy('categories', array('project'), array(
		'hierarchical'  => true,
		'labels'        => array(
			'name'              => _x( 'Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'Categories', 'taxonomy singular name' ),
			'search_items'      =>  __( 'Search Categories' ),
			'all_items'         => __( 'All Categories' ),
			'parent_item'       => __( 'Parent Categories' ),
			'parent_item_colon' => __( 'Parent Categories:' ),
			'edit_item'         => __( 'Edit Categories' ),
			'update_item'       => __( 'Update Categories' ),
			'add_new_item'      => __( 'Add New Categories' ),
			'new_item_name'     => __( 'New Categories Name' ),
			'menu_name'         => __( 'Categories' ),
		),
		'show_ui'       => true,
		'query_var'     => true,
		'rewrite'       => array( 'slug' => 'the_categories' ), // свой слаг в URL
	));

	// Добавляем НЕ древовидную таксономию 'tag' (как метки)
	register_taxonomy('tag', 'project',array(
		'hierarchical'  => false,
		'labels'        => array(
			'name'                        => _x( 'Tags', 'taxonomy general name' ),
			'singular_name'               => _x( 'Tag', 'taxonomy singular name' ),
			'search_items'                =>  __( 'Search Tags' ),
			'popular_items'               => __( 'Popular Tags' ),
			'all_items'                   => __( 'All Tags' ),
			'parent_item'                 => null,
			'parent_item_colon'           => null,
			'edit_item'                   => __( 'Edit Tag' ),
			'update_item'                 => __( 'Update Tag' ),
			'add_new_item'                => __( 'Add New Tag' ),
			'new_item_name'               => __( 'New Tag Name' ),
			'separate_items_with_commas'  => __( 'Separate tags with commas' ),
			'add_or_remove_items'         => __( 'Add or remove tag' ),
			'choose_from_most_used'       => __( 'Choose from the most used tags' ),
			'menu_name'                   => __( 'Tags' ),
		),
		'show_ui'       => true,
		'query_var'     => true,
		'rewrite'       => array( 'slug' => 'the_tag' ), // свой слаг в URL
	));
}


add_action('init', 'my_custom_reviews');
function my_custom_reviews(){
	register_post_type('review', array(
		'labels'             => array(
			'name'               => __('Reviews'), // Основное название типа записи
			'singular_name'      => __('Reviews'), // отдельное название записи типа Book
			'add_new'            => __('Add new '),
			'add_new_item'       => __('Add new review'),
			'edit_item'          => __('Edit review'),
			'new_item'           => __('New review'),
			'view_item'          => __('Show review'),
			'search_items'       => __('Find review'),
			'not_found'          =>  'Do not have a review',
			'not_found_in_trash' => 'Do not have a review on a cart',
			'parent_item_colon'  => '',
			'menu_name'          => 'Reviews'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'menu_icon'					 => 'dashicons-nametag',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => '22',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}

add_action('init', 'my_custom_employee');
function my_custom_employee(){
	register_post_type('employee', array(
		'labels'             => array(
			'name'               => __('Employees'), // Основное название типа записи
			'singular_name'      => __('Employees'), // отдельное название записи типа Book
			'add_new'            => 'Add new ',
			'add_new_item'       => 'Add new employee',
			'edit_item'          => 'Edit employee',
			'new_item'           => 'New employee',
			'view_item'          => 'Show employee',
			'search_items'       => 'Find employee',
			'not_found'          =>  'Do not have a employee',
			'not_found_in_trash' => 'Do not have a employee on a cart',
			'parent_item_colon'  => '',
			'menu_name'          => 'Employees'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'menu_icon'					 => 'dashicons-groups',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => '23',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}

add_action('init', 'my_custom_servic');
function my_custom_servic(){
	register_post_type('servic', array(
		'labels'             => array(
			'name'               => __('Servic'), // Основное название типа записи
			'singular_name'      => __('Servic'), // отдельное название записи типа Book
			'add_new'            => 'Add new ',
			'add_new_item'       => 'Add new servic',
			'edit_item'          => 'Edit servic',
			'new_item'           => 'New servic',
			'view_item'          => 'Show servic',
			'search_items'       => 'Find servic',
			'not_found'          =>  'Do not have a servic',
			'not_found_in_trash' => 'Do not have a servic on a cart',
			'parent_item_colon'  => '',
			'menu_name'          => 'Servic'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'menu_icon'					 => 'dashicons-hammer',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => '23',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}

add_filter('the_content', 'filter_content_words');
function filter_content_words($content_word){
	if (is_page(89) || is_home()){
		return wp_trim_words($content_word, 15, ' ...');
	} else {
		return $content_word;
	}
}

add_filter('wpcf7_autop_or_not', '__return_false');
// add_filter( 'wpcf7_validate_configuration', '__return_false' );
