<?php
/*
Plugin Name: Custom Menu Item with Hover Effect
Description: Plugin to add a custom HTML item to a specific menu with hover effect.
Version: 1.0
Author: Your Name
*/

// Register the custom walker
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Start the element output.
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        if($item->ID != 117){
            $item_output .= '<div class="child"><a href="#">test2</a></div>'; // Add child div here
        }
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

function register_custom_menu_walker($args) {
    if ($args['theme_location'] == 'main-nav') {
        $args['walker'] = new Custom_Walker_Nav_Menu();
    }
    return $args;
}
add_filter('wp_nav_menu_args', 'register_custom_menu_walker');


function enqueue_custom_menu_item_styles_scripts() {
    wp_enqueue_script('custom-menu-item-scripts', plugins_url('menu.nav.js', get_template_directory_uri().'/themes/fake.apple.theme/assets/js/menu.nav.js'), array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_menu_item_styles_scripts');