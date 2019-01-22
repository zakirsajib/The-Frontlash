<?php
/**
 * FrontLash functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FrontLash
 */

if ( ! function_exists( 'frontlash_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function frontlash_setup() {
		
		//if(! current_user_can('update_core')){return;}
		//add_action('init', create_function('$a',"remove_action( 'init', 'wp_version_check' );"),2);
		//add_filter('pre_option_update_core','__return_null');
		//add_filter('pre_site_transient_update_core','__return_null');
		
		
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on FrontLash, use a find and replace
		 * to change 'frontlash' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'frontlash', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary', 'frontlash' ),
			'secondary' => esc_html__( 'Secondary', 'frontlash' ),
			'footer' => esc_html__( 'Footer', 'frontlash' ),
			'header_top_left' => esc_html__( 'Desktop Header Top Left', 'frontlash' ),
			'header_top_left_mobile' => esc_html__( 'Mobile Header Top Left', 'frontlash' ),
			'header_mobile_one' => esc_html__( 'Header Mobile One', 'frontlash' ),
			'header_mobile_two' => esc_html__( 'Header Mobile Two', 'frontlash' ),
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
add_action( 'after_setup_theme', 'frontlash_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function frontlash_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'frontlash_content_width', 640 );
}
add_action( 'after_setup_theme', 'frontlash_content_width', 0 );

add_action( 'widgets_init', 'frontlash_widgets_init' );

add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );

add_action( 'wp_enqueue_scripts', 'frontlash_scripts');

add_filter( 'pwp_site_supports_amp', '__return_true' );
add_action( 'loop_start', 'jptweak_remove_share' );
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
 * Unyson theme settings.
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Unyson init settings.
 */
require get_template_directory() . '/inc/init.php';


/**
 * Style Index Shortcode.
 */
require get_template_directory() . '/inc/style-index.php';
/**
 * Style Index Results Shortcode.
 */
require get_template_directory() . '/inc/style-index-results.php';

/**
 * TGM Plugin Activation
 */

require_once dirname( __FILE__ ) . '/TGM-Plugin-Activation/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', '_action_theme_register_required_plugins' );

add_filter( 'jetpack_implode_frontend_css', '__return_false' );
add_action('wp_print_styles', 'remove_jetpack_styles' );

add_action('save_post', 'save_video_thumbnail_to_featured_image', 10, 3);
add_action('the_post', 'save_video_thumbnail_to_featured_image', 10, 3);
add_action('new_to_publish', 'save_video_thumbnail_to_featured_image', 10, 3);
add_action('draft_to_publish', 'save_video_thumbnail_to_featured_image', 10, 3);
add_action('pending_to_publish', 'save_video_thumbnail_to_featured_image', 10, 3);
add_action('future_to_publish', 'save_video_thumbnail_to_featured_image', 10, 3);