<?php
/**
 * munurist functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package munurist
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function munurist_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on munurist, use a find and replace
		* to change 'munurist' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'munurist', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-header' => esc_html__( 'Меню в шапке', 'munurist' ),
			'menu-services' => esc_html__( 'Наши услуги', 'munurist' ),
			'menu-about' => esc_html__( 'О нас', 'munurist' ),
			'mobile-menu' => esc_html__( 'Мобильное меню', 'munurist' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'munurist_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'munurist_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function munurist_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'munurist_content_width', 640 );
}
add_action( 'after_setup_theme', 'munurist_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function munurist_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'munurist' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'munurist' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'munurist_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function munurist_scripts() {

	wp_deregister_script('jquery');

	wp_enqueue_style( 'munurist-style', get_stylesheet_uri(), array(), _S_VERSION );

	// Custom styles
	
	wp_enqueue_style( 'munurist-fonts', get_template_directory_uri(). '/assets/fonts/stylesheet.css', array(), '1.0' );
	wp_enqueue_style( 'munurist-magnific-popup-css', get_template_directory_uri(). '/assets/css/magnific-popup.css', array(), '1.1.0' );
	wp_enqueue_style( 'munurist-style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '4.2' );
	wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/assets/css/animate.css', array(), '4.1.1' ); //* Ubah letak animate.min.css kamu simpan
	
	

	// Custom scripts

	wp_enqueue_script( 'munurist-jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), '3.7.1', true );
	wp_enqueue_script( 'munurist-magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.1.0', true );
	wp_enqueue_script( 'munurist-inputmask-js', get_template_directory_uri() . '/assets/js/jquery.inputmask.min.js', array(), '5.0.9-beta.39', true );
	wp_enqueue_script( 'munurist-script-js', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true );
	wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/assets/js/wow.min.js', array(), '1.3.0', true ); //* Ubah letak wow.min.css kamu simpan

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'munurist_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Меняем класс логотипа START */
add_filter( 'get_custom_logo', 'add_custom_logo_url' );
function add_custom_logo_url() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$html = sprintf( '<a href="%1$s" class="header-logo" rel="home" itemprop="url">%2$s</a>',
			esc_url( '/' ),
			wp_get_attachment_image( $custom_logo_id, 'full', false, array(
				'class'    => 'header-logo-img',
			) )
		);
	return $html;
}
/**
 * Меняем класс логотипа END */

  /**
  * Отключаем редактор Gutenberg START */
  if( 'disable_gutenberg' ){
	remove_theme_support( 'core-block-patterns' ); // WP 5.5

	add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

	// отключим подключение базовых css стилей для блоков
	// ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
	remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );

	// Move the Privacy Policy help notice back under the title field.
	add_action( 'admin_init', function(){
		remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
		add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
	} );
}
/**
 * Отключаем редактор Gutenberg END */

  /**
  * Страница Настроек START */
  function hide_settings_page($query) {
	if ( !is_admin() && !is_main_query() ) {
		return;
	}    
	global $typenow;
	if ($typenow === "page") {
		// Replace "site-settings" with the slug of your site settings page.
		$settings_page = get_page_by_path("options-page",NULL,"page")->ID;
		$query->set( 'post__not_in', array($settings_page) );    
	}
	return;

}
add_action('pre_get_posts', 'hide_settings_page');


// Добавляем пункт меню в админку
function add_site_settings_to_menu(){
	add_menu_page( 
		'Страница настроек', 
		'Страница настроек', 
		'manage_options', 
		'post.php?post='.get_page_by_path("options-page",NULL,"page")->ID.'&action=edit', 
		'', 
		'dashicons-admin-tools', 
		15);
}
add_action( 'admin_menu', 'add_site_settings_to_menu' );
/**
 * Страница Настроек END */

  /**
  * Отключение визуального редактора START */
  function disable_content_editor()
  {
	  if (isset($_GET['post'])) {
		  $post_ID = $_GET['post'];
	  } else if (isset($_POST['post_ID'])) {
		  $post_ID = $_POST['post_ID'];
	  }
  
	  if (!isset($post_ID) || empty($post_ID)) {
		  return;
	  }
  
	  /*
	   * Отключить возможность редактирования для страниц с ID 18, 47 и 190 (для случаев, когда нужно отключить редактор сразу для нескольких страниц)
	   */
	  $disabled_IDs = array(15, 33, 255);
	  if (in_array($post_ID, $disabled_IDs)) {
		  remove_post_type_support('page', 'editor');
	  }
  }
  
  add_action('admin_init', 'disable_content_editor');
  /**
   * Отключение визуального редактора END */


   add_action( 'init', 'register_post_types' );

   function register_post_types(){
   
	   register_post_type( 'courses', [
		   'label'  => null,
		   'labels' => [
			   'name'               => 'Курсы повышения квалификации', // основное название для типа записи
			   'singular_name'      => 'Курс повышения квалификации', // название для одной записи этого типа
			   'add_new'            => 'Добавить курс', // для добавления новой записи
			   'add_new_item'       => 'Добавление курса', // заголовка у вновь создаваемой записи в админ-панели.
			   'edit_item'          => 'Редактирование курса', // для редактирования типа записи
			   'new_item'           => 'Новый курс', // текст новой записи
			   'view_item'          => 'Смотреть курс', // для просмотра записи этого типа.
			   'search_items'       => 'Искать курс', // для поиска по этим типам записи
			   'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			   'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			   'parent_item_colon'  => '', // для родителей (у древовидных типов)
			   'menu_name'          => 'Курсы повышения квалификации', // название меню
		   ],
		   'description'            => '',
		   'public'                 => true,
		   // 'publicly_queryable'  => null, // зависит от public
		   // 'exclude_from_search' => null, // зависит от public
		   // 'show_ui'             => null, // зависит от public
		   // 'show_in_nav_menus'   => null, // зависит от public
		   'show_in_menu'           => true, // показывать ли в меню админки
		   // 'show_in_admin_bar'   => null, // зависит от show_in_menu
		   'menu_icon'           => null,
		   //'capability_type'   => 'post',
		   //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		   //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		   'hierarchical'        => false,
		   'supports'            => [ 'title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		   'taxonomies'          => [],
		   'has_archive'         => false,
		   'rewrite'             => true,
		   'query_var'           => true,
	   ] );

	   register_post_type( 'programms', [
		'label'  => null,
		'labels' => [
			'name'               => 'Программы профессиональной переподготовки', // основное название для типа записи
			'singular_name'      => 'Программа профессиональной переподготовки', // название для одной записи этого типа
			'add_new'            => 'Добавить программу', // для добавления новой записи
			'add_new_item'       => 'Добавление программы', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование программы', // для редактирования типа записи
			'new_item'           => 'Новая программа', // текст новой записи
			'view_item'          => 'Смотреть программу', // для просмотра записи этого типа.
			'search_items'       => 'Искать программу', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Программы профессиональной переподготовки', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
   
   }  

 

   function bottom_commentfield( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment']);
	$fields['comment'] = $comment_field;
	return $fields;
   }

   add_filter('comment_form_fields', 'bottom_commentfield');

   //* Enqueue Animate.CSS and WOW.js
 
   //* Nambahin animate & Wow.js

	//* aktifasi WOW.js
   add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');
   function sk_wow_init_in_footer() {
	   add_action( 'print_footer_scripts', 'wow_init' );
   }
	//* nemambahkan javascript sebelum </body>
   function wow_init() { ?>
	   <script type="text/javascript">
		   new WOW().init();
	   </script>
   <?php }

