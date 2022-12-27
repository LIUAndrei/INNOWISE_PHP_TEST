<?php 

function innowisetest_theme_support() {

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
};

add_action('after_setup_theme', 'innowisetest_theme_support');

function innowisetest_menus() {

    $menuLocations = array(
        'primary' => "Top Right Menu",
        'secondary' => "Footer Extended Menu"
    );
    register_nav_menus($menuLocations);
}

add_action('init', 'innowisetest_menus');

function innowisetest_register_styles() {

    wp_enqueue_style('innowisetest-styles', get_template_directory_uri() . "/style.css", array('innowisetest-gstatic', 'innowisetest-googleapis', 'innowisetest-font' ), '1.0', 'all');
    wp_enqueue_style('innowisetest-googleapis', "https://fonts.googleapis.com", array(), '1.0', 'all');
    wp_enqueue_style('innowisetest-gstatic',  "https://fonts.gstatic.com", array(), '1.0', 'all');
    wp_enqueue_style('innowisetest-font', "https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'innowisetest_register_styles');


?>