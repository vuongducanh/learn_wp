<?php
/**
 * khai bao hang gia tri
 * THEME_URL = lay duong dan thu muc theme
 * CORE = lay duong dan thu muc /core
 */
define('THEME_URL', get_stylesheet_directory_uri());
define('CORE' ,THEME_URL . '/core');

/**
 * Nhung file /core/init.php
 */

//require_once(CORE . '/init.php');

/**
 * Thiet lap chieu rong noi dung cua trang
 */
if (!isset($content_width)) {
    $content_width = 1902;
}

/**
 * Khai bao chuc nang cua theme
 */

if (!function_exists('set_theme_setup')) {
    function set_theme_setup() {
        /** thiet lap text domain*/
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('load_theme', $language_folder);
        /** tu dong them link RSS len <head>*/
        add_theme_support('automatic-feed-link');

        /** theme post thumbnails */
        add_theme_support('post-thumbnails', array('post'));

        /** post formats */
        add_theme_support('post-formats',array(
            'images',
            'video',
            'gallery',
            'link'
        ));

        /** theme title-tag */
        add_theme_support('title-tag');

        /** theme custom background */
        $default_background = array(
            'default-color' => '#e8e8e8'
        );
        add_theme_support('custom-background', $default_background);

        /** add menu */
        register_nav_menu('primary-menu' ,__('header menu' , 'load_theme'));
        /** tao sidebar */
        $sidebar = array(
            'name' => __('Main Sidebar' ,'load_theme'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        );
        register_sidebar( $sidebar );
    }
    add_action('init' ,'set_theme_setup');
}

