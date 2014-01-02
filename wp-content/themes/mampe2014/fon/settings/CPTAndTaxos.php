<?php

/* Custom taxonomies
   ----------------------------- */

$post = new Custom_Post_Type( 'Post' );
// $post->add_taxonomy( 'support' );

/* Custom post types
   ----------------------------- */

$portfolio = new Custom_Post_Type( 'portfolio' );
$experience = new Custom_Post_Type( 'experience' );
$experience->add_taxonomy( 'type' );
// $game->add_taxonomy( 'support' );
