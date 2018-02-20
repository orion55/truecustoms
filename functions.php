<?php
/**
 * truecustoms functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package truecustoms
 */

if (!function_exists('truecustoms_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function truecustoms_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on truecustoms, use a find and replace
         * to change 'truecustoms' to the name of your theme in all the template files.
         */
        load_theme_textdomain('truecustoms', get_template_directory() . '/languages');

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
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'truecustoms'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('truecustoms_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'truecustoms_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function truecustoms_content_width()
{
    $GLOBALS['content_width'] = apply_filters('truecustoms_content_width', 640);
}

add_action('after_setup_theme', 'truecustoms_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function truecustoms_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'truecustoms'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'truecustoms'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'truecustoms_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function truecustoms_scripts()
{
    wp_enqueue_style('truecustoms-style', get_stylesheet_uri());
    wp_enqueue_style('truecustoms-style-main', get_template_directory_uri() . '/assets/css/main.min.css');
    wp_enqueue_style('truecustoms-style-vendor', get_template_directory_uri() . '/assets/css/vendor.min.css');
    wp_enqueue_style('truecustoms-fa', get_template_directory_uri() . '/fa-svg-with-js.css');

    wp_enqueue_style('truecustoms-style', get_stylesheet_uri());

    wp_enqueue_script('truecustoms-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('truecustoms-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    wp_enqueue_script('truecustoms-fontawesome', get_template_directory_uri() . '/js/fontawesome-all.min.js', [], '', true);
    wp_enqueue_script('truecustoms-map', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', [], '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('truecustoms-cocoen', get_template_directory_uri() . '/assets/js/vendor.min.js', array('jquery'), '', true);
    wp_enqueue_script('truecustoms-main', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'truecustoms_scripts');

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

/**
 * Generated by the WordPress Option Page generator
 * at http://jeremyhixon.com/wp-tools/option-page/
 */
class Truecustoms
{
    private $truecustoms_options;

    public function __construct()
    {
        add_action('admin_menu', array($this, 'truecustoms_add_plugin_page'));
        add_action('admin_init', array($this, 'truecustoms_page_init'));
    }

    public function truecustoms_add_plugin_page()
    {
        add_menu_page(
            'Truecustoms', // page_title
            'Truecustoms', // menu_title
            'manage_options', // capability
            'truecustoms', // menu_slug
            array($this, 'truecustoms_create_admin_page'), // function
            'dashicons-admin-generic', // icon_url
            81 // position
        );
    }

    public function truecustoms_create_admin_page()
    {
        $this->truecustoms_options = get_option('truecustoms_option_name'); ?>

        <div class="wrap">
            <h2>Тема Truecustoms</h2>
            <?php settings_errors(); ?>

            <form method="post" action="options.php">
                <?php
                settings_fields('truecustoms_option_group');
                do_settings_sections('truecustoms-admin');
                submit_button();
                ?>
            </form>
        </div>
    <?php }

    public function truecustoms_page_init()
    {
        register_setting(
            'truecustoms_option_group', // option_group
            'truecustoms_option_name', // option_name
            array($this, 'truecustoms_sanitize') // sanitize_callback
        );

        add_settings_section(
            'truecustoms_setting_section', // id
            'Настройки', // title
            array($this, 'truecustoms_section_info'), // callback
            'truecustoms-admin' // page
        );

        add_settings_field(
            '_0', // id
            'Адрес', // title
            array($this, '_0_callback'), // callback
            'truecustoms-admin', // page
            'truecustoms_setting_section' // section
        );

        add_settings_field(
            '_1', // id
            'Телефон', // title
            array($this, '_1_callback'), // callback
            'truecustoms-admin', // page
            'truecustoms_setting_section' // section
        );
    }

    public function truecustoms_sanitize($input)
    {
        $sanitary_values = array();
        if (isset($input['_0'])) {
            $sanitary_values['_0'] = sanitize_text_field($input['_0']);
        }

        if (isset($input['_1'])) {
            $sanitary_values['_1'] = sanitize_text_field($input['_1']);
        }

        return $sanitary_values;
    }

    public function truecustoms_section_info()
    {

    }

    public function _0_callback()
    {
        printf(
            '<input class="regular-text" type="text" name="truecustoms_option_name[_0]" id="_0" value="%s">',
            isset($this->truecustoms_options['_0']) ? esc_attr($this->truecustoms_options['_0']) : ''
        );
    }

    public function _1_callback()
    {
        printf(
            '<input class="regular-text" type="text" name="truecustoms_option_name[_1]" id="_1" value="%s">',
            isset($this->truecustoms_options['_1']) ? esc_attr($this->truecustoms_options['_1']) : ''
        );
    }

}

if (is_admin())
    $truecustoms = new Truecustoms();

/*
 * Retrieve this value with:
 * $truecustoms_options = get_option( 'truecustoms_option_name' ); // Array of All Options
 * $_0 = $truecustoms_options['_0']; // Адрес
 * $_1 = $truecustoms_options['_1']; // Телефон
 */

