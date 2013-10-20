<div class="content">
    <div class="push_cover"></div>
	<?php 
	$cover_args = array(
	     'post_type'   => 'cover',
	     'post_status' => 'publish'
	);
	query_posts($cover_args);
	while ( have_posts() ) : the_post();
        $img_args = array( 
            'post_type' => 'attachment',
            'numberposts' => 1,
            'post_status' => null,
            'post_parent' => $post->ID
        ); 
        $attachments = get_posts($img_args);
        if ($attachments) {
            foreach ($attachments as $attachment) {
                $attr = array(
					'class'	=> "cover thumb",
				);
                echo wp_get_attachment_image($attachment->ID, 'cover', '', $attr);
            }
        }
	endwhile;
	wp_reset_query();
	?>
</div><!-- #content -->