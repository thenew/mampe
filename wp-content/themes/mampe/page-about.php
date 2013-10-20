<?php
/*
Template Name: About
*/
get_header();
the_post();
?>
<div class="content cf">
	<div class="content-part">
		<div class="content-centric cf">
			<div class="main-column scrollme" id="container">
				<div id="container-content">
			    	<?php the_content(); ?>
				</div>
			</div>
			<div id="scrollbar" class="scrollbar-vert hideme"><div id="handle" class="handle-vert"></div></div>
		</div>
	</div>

	<aside class="sidebar">
		<?php
		$attr = array(
			'class'	=> "portrait"
		);
		echo get_the_post_thumbnail($post->ID, 'portrait', $attr);
		?>
	</aside>
</div>
<script type="text/javascript">
	mampeScroll();
</script>
<?php 
get_footer();