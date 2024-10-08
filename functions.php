<?php
    add_action("wp_enqueue_scripts", "add_scripts_and_styles");
    add_action("after_setup_theme", "add_menu");

    function add_scripts_and_styles() {
        wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
        wp_enqueue_style("style", get_stylesheet_uri());
        wp_enqueue_style("default_style", get_template_directory_uri() . "/assets/css/style.css");
        wp_enqueue_style("media_style", get_template_directory_uri() . "/assets/css/style-media.css");
        wp_enqueue_style("animate", get_template_directory_uri() . "/assets/css/animate.min.css");
        if (is_page('Home')) {
            wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/custom-index-style.css');
        }
        wp_enqueue_style("header_conf", get_template_directory_uri() . "/assets/css/header-additional-conf.css");
        wp_enqueue_style("icon", get_template_directory_uri() . "/assets/image/icon/style.css");
        wp_enqueue_style("fontJost", get_template_directory_uri() . "/assets/fonts/Jost/stylesheet.css");
        wp_enqueue_style("fontBellefair", get_template_directory_uri() . "/assets/fonts/Bellefair/stylesheet.css");
        
        wp_enqueue_script("script", get_template_directory_uri() . "/assets/js/script.js", array(), "1.0.0", true );
        wp_enqueue_script("burger_menu", get_template_directory_uri() . "/assets/js/burgerMenu.js", array(), "1.0.0", true );
        wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true);
        wp_add_inline_script('wow-js', 'new WOW().init();');

        wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true);
        wp_enqueue_script('custom-swiper-init', get_template_directory_uri() . '/assets/js/swiper-init.js', array('swiper-js'), null, true);
    }

    function add_menu(){
        register_nav_menu( "top", "main menu" );
        register_nav_menu( "bottom", "footer menu" );
    }
    
?>