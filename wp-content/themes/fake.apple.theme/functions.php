<?php

wp_enqueue_style( 'main-nav', get_template_directory_uri().'./assets/style/main.nav.css', array(),  'all' );
wp_enqueue_style( 'menu-items', get_template_directory_uri().'./assets/style/menu-items.css', array(),  'all' );
wp_enqueue_style( 'post-style', get_template_directory_uri().'./assets/style/post-style.css', array(),  'all' );
wp_enqueue_style( 'temp', get_template_directory_uri().'./assets/style/temp.css', array(),  'all' );

wp_enqueue_style( 'custom-footer-css', get_template_directory_uri().'./assets/style/custom.footer.css', array(),  'all' );
wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '6.1.1' );
add_theme_support('menus');

register_nav_menus( 
    array(
        'main-nav' => 'main-nav',
        'Explore' => 'Explore',
        'account' => 'account',
        'Entertainment' => 'Entertainment',
        'About Apple' => 'About Apple'
    )
);