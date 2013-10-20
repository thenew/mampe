<?php
	$args = array(
		'taxonomy' => 'category',
		'orderby' => 'id'
	);
	$categories =  get_categories($args);

	$cat_thumbs = array(
		'animation' => 'cat-anim.png',
		'graphism' => 'cat-graph.png',
		'modeling' => 'cat-mode.png',
		'photo' => 'cat-photo.png'
	);
?>
<div class="content cf">
	<div class="content-part">
		<div class="content-centric cf">
			<div class="main-column scrollme" id="container_p">
				<div id="container-content_p">
					<ul>
						<?php foreach($categories as $cat):
							$thumb = 'cat-default.png';
							foreach($cat_thumbs as $slug => $img){
								if ($slug == $cat->slug)
									$thumb = $img;
							}
							$link = get_category_link($cat->cat_ID);
							echo '<li class="loop-short">
								<a href="'.$link.'">
								    <img class="thumb" src="'.get_bloginfo('stylesheet_directory').'/img/'.$thumb.'" alt="'.$cat->name.'" />
									<h2 class="">'.$cat->name.'</h2>
								</a>
							</li>';
						endforeach; ?>
					</ul>
				</div>
			</div>
			<div id="scrollbar_p" class="scrollbar-vert hideme"><div id="handle_p" class="handle-vert"></div></div>
		</div>
	</div>
	<aside class="sidebar">
		<?php get_sidebar('portfolio'); ?>
	</aside>
</div>
<script type="text/javascript">
	mampeScroll('_p');
</script>
