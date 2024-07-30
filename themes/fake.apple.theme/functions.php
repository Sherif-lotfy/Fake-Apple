<?php

wp_enqueue_style( 'custon-css', get_template_directory_uri().'./assets/style/custom.menu.css', array(),  'all' );
// wp_enqueue_style('bootstrap-css', get_template_directory_uri() . './Bootstrap/css/bootstrap.min.css');
// wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/style/custom.css' , array());

add_theme_support('menus');

register_nav_menus( 
    array(
        'main-nav' => 'main-nav',
        'Explore' => 'Explore',
        'sec-nav' => 'sec nav'
    )
);