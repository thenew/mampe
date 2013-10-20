<li class="loop-short">
	<a href="<?php the_permalink(); ?>">
		<?php
		$attr = array(
			'class'	=> "thumb"
		);
    $thumb = get_the_post_thumbnail($post->ID, '460x85', $attr);
    if($thumb && '' != $thumb)
  		echo $thumb;
    else
      echo '<img class="thumb" src="'.get_bloginfo('stylesheet_directory').'/img/cat-default.png" alt="default thumb" />';
		?>
		<h2 class=""><?php the_title(); ?></h2>
	</a>
</li>
