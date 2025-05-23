<?php

/**
 * angel_pet functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package angel_pet
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function angel_pet_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on angel_pet, use a find and replace
		* to change 'angel_pet' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('angel_pet', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'angel_pet'),
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
			'angel_pet_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'angel_pet_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function angel_pet_content_width()
{
	$GLOBALS['content_width'] = apply_filters('angel_pet_content_width', 640);
}
add_action('after_setup_theme', 'angel_pet_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function angel_pet_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'angel_pet'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'angel_pet'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'angel_pet_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function angel_pet_scripts()
{
	// Google Fontsの追加
	wp_enqueue_style('google-fonts-preconnect', '', false, null);
	wp_style_add_data('google-fonts-preconnect', 'html_tag', 'link');
	wp_style_add_data('google-fonts-preconnect', 'attributes', array(
		'rel' => 'preconnect',
		'href' => 'https://fonts.googleapis.com'
	));

	wp_enqueue_style('google-fonts-gstatic-preconnect', '', false, null);
	wp_style_add_data('google-fonts-gstatic-preconnect', 'html_tag', 'link');
	wp_style_add_data('google-fonts-gstatic-preconnect', 'attributes', array(
		'rel' => 'preconnect',
		'href' => 'https://fonts.gstatic.com',
		'crossorigin' => 'anonymous'
	));

	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap', array(), null);

	// メインのスタイルシートを読み込み
	wp_enqueue_style('angel-pet-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('angel-pet-style', 'rtl', 'replace');

	wp_enqueue_script('angel-pet-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	// dots.jsはindex.phpでのみ読み込む
	if (is_front_page() || is_home()) {
		wp_enqueue_script('dots', get_template_directory_uri() . '/js/dots.js', array(), _S_VERSION, true);
	}

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'angel_pet_scripts');

function enqueue_swiper_scripts()
{
	wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
	wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '1.0', true);
	wp_enqueue_script('custom-swiper', get_template_directory_uri() . '/js/custom-swiper.js', array('swiper-js'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts');

// 固定ページでのみpopup.jsを読み込む
function enqueue_popup_script()
{
	if (is_page()) {
		wp_enqueue_script('popup-script', get_template_directory_uri() . '/js/popup.js', array(), _S_VERSION, true);
	}
}
add_action('wp_enqueue_scripts', 'enqueue_popup_script');

// 固定ページでのみfade.jsを読み込む
function enqueue_fade_script()
{
	if (is_page()) {
		wp_enqueue_script('fade-script', get_template_directory_uri() . '/js/fade.js', array(), _S_VERSION, true);
	}
}
add_action('wp_enqueue_scripts', 'enqueue_fade_script');

// QAページでのみaccordion.jsを読み込む
function enqueue_accordion_script()
{
	if (is_page_template('page-qa.php')) {
		wp_enqueue_script('accordion-script', get_template_directory_uri() . '/js/accordion.js', array(), _S_VERSION, true);
	}
}
add_action('wp_enqueue_scripts', 'enqueue_accordion_script');

// logo.jsを読み込む
function enqueue_logo_script()
{
	wp_enqueue_script('logo-script', get_template_directory_uri() . '/js/logo.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'enqueue_logo_script');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// WPのバージョン情報などをヘッダーから削除
remove_action('wp_head', 'wp_generator');

// 絵文字スクリプトを無効化（読み込みが少し軽くなる）
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// コメントRSSリンクを削除
remove_action('wp_head', 'feed_links_extra', 3);

// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
	return false;
}

// サイドバーの最新記事の日付フォーマットを変更
function custom_recent_posts_date_format($date)
{
	return date_i18n('Y年n月j日', strtotime($date));
}
add_filter('get_the_date', 'custom_recent_posts_date_format');
add_filter('get_the_modified_date', 'custom_recent_posts_date_format');
add_filter('widget_recent_posts_date_format', 'custom_recent_posts_date_format');
