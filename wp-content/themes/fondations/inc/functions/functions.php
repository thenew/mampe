<?php

/*
 * Pagination
 * merci Cédric
 */
  function fon_paginate() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
 
	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => true,
		'type' => 'list',
		'next_text' => '&raquo;',
		'prev_text' => '&laquo;'
		);
 
	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
 
	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
 
	echo paginate_links( $pagination );
}

function fon_get_attachment($page_id, $format) {
    query_posts('post_type=page&p='.$page_id);
    while (have_posts()) : the_post();
        $args = array( 
            'post_type' => 'attachment', 
            'numberposts' => 1, 
            'post_status' => null,
            'post_parent' => $post->ID 
        );
        $attachments = get_posts($args);
        if ($attachments) {
            foreach ($attachments as $attachment) {
                return wp_get_attachment_image($attachment->ID, $format);
            }
        }
    endwhile;
    wp_reset_query();
}

/*
 * Thumbnails
 * active theme support & add thumbs sizes
 */

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	if ( function_exists( 'add_image_size' ) ) { 
		// add_image_size( 'slider', 9999, 400, true );
		add_image_size( '460x85', 460, 85, true );
	}
}

