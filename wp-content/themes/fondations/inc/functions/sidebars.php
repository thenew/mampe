<?php 
function fon_widgets_init() {

	register_sidebar(array(
		'name' => 'Contact Sidebar',
		'id' => 'sidebar-contact',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

}
add_action( 'widgets_init', 'fon_widgets_init' );
