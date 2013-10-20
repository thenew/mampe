<?php
get_header();
?>
<div class="content">
	<div class="content-part">
		<div class="content-centric cf">
			<div class="main-column scrollme" id="container_p">
				<div id="container-content_p">
				<?php
				$args = array(
					'post_type' => array('post', 'portfolio'),
					'cat' => $cat,
					'post_status ' => 'publish'
				);
				query_posts($args);
				if (have_posts ()):
				?>
					<ul>
						<?php
						while (have_posts ()) : the_post(); ?>
							<?php get_template_part( 'loop', 'short' ); ?>
						<?php endwhile;?>
						<?php // include TEMPLATEPATH.'/tpl/tpl_pagination.php'; ?>
					</ul>
				<?php
				endif;
				wp_reset_query();
				?>
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
<?php 
get_footer();