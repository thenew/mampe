<?php

add_action( 'widgets_init', 'fon_register_widgets' );
// Inclure les fichiers de widgets
function fon_register_widgets() {
    register_widget('last_Widget');
    register_widget('social_Widget');
}

// Désactive les widgets par défaut dans l'admin Wordpress
add_action( 'widgets_init', 'unregister_default_wp_widgets' );
function unregister_default_wp_widgets() {
    unregister_widget( 'WP_Widget_Categories' );
    unregister_widget( 'WP_Widget_Recent_Posts' );
    unregister_widget( 'WP_Widget_Search' );
    unregister_widget( 'WP_Widget_Tag_Cloud' );
    unregister_widget( 'WP_Widget_Meta' );
    unregister_widget( 'WP_Widget_Pages' );
    unregister_widget( 'WP_Widget_Calendar' );
    unregister_widget( 'WP_Widget_Archives' );
    unregister_widget( 'WP_Widget_Links' );
    unregister_widget( 'WP_Widget_Recent_Comments' );
    unregister_widget( 'WP_Widget_RSS' );
    unregister_widget( 'WP_Widget_Text' );
    unregister_widget( 'WP_Nav_Menu_Widget' );
}
