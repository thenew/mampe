<?php // Chargement des JS
add_action('init', 'fon_script_init');
function fon_script_init() {
    if (!is_admin()){
    	// wp_deregister_script( 'jquery' ); // unregistered key jQuery
        // wp_enqueue_script('jquery',get_bloginfo('template_url').'/js/lib/jquery-1.7.1.min.js','','1.7.1',false);
        wp_enqueue_script('mootools',get_bloginfo('template_url').'/js/lib/mootools-core-1.3.2-full-compat-yc.js','','1.3.2',false);
        wp_enqueue_script('mootools-more',get_bloginfo('template_url').'/js/lib/mootools-more-1.3.1.1.js','','1.3.1.1',false);
        wp_enqueue_script('modernizr',get_bloginfo('template_url').'/js/lib/modernizr-1.7.min.js','','1.7',false);
        wp_enqueue_script('selectivizr',get_bloginfo('template_url').'/js/lib/selectivizr.js','','1.0.2',false);
        // wp_enqueue_script('twitter',get_bloginfo('template_url').'/js/lib/twitter.js','','1.0',false);
        // wp_enqueue_script('jbhslider',get_bloginfo('template_url').'/js/jbh_slider.js','','1.0.5',false);
        wp_enqueue_script('iscroll',get_bloginfo('template_url').'/js/iscroll.js','','4.0',false);
        wp_enqueue_script('functions',get_bloginfo('template_url').'/js/functions.js','','1.0',false);
        wp_enqueue_script('events',get_bloginfo('template_url').'/js/events.js','','1.0',false);
        wp_enqueue_script('mampe',get_bloginfo('stylesheet_directory').'/js/mampe.js','','1.0',false);
        wp_enqueue_script('humblebox',get_bloginfo('stylesheet_directory').'/js/HumbleBox.js','','1.0',false);
        wp_enqueue_script('cerabox',get_bloginfo('stylesheet_directory').'/js/cerabox.min.js','','1.0',false);
    }
    else {
        wp_enqueue_script('admin',get_bloginfo('template_url').'/js/admin.js','','1.0',false);
    }
}