<?php
define('DEV', false);

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'cover', '855', '320', true );
		add_image_size( '460x85', 460, 85, true );
		add_image_size( 'portrait', 280, 400, true );
	}
}


/*Local*/
// update_option('contact_pageid', 6);
/*Preprod*/
// update_option('about_pageid', 7);
// update_option('contact_pageid', 5);
/*Prod*/
// if(!get_option('about_pageid')) {
//   update_option('about_pageid', 7);
//   update_option('contact_pageid', 6);
// }
define('MENTIONSLEGALES_PAGEID', 174);


// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );

