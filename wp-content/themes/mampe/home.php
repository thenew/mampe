<?php
get_header();
?>
<!-- HOME -->
<div class="scrollpage page_home" id="home">
	<div class="main-of-page">
		<?php get_template_part('tpl','home'); ?>
	</div>
</div><!-- home -->

<!-- PORTFOLIO -->
<div class="scrollpage page_portfolio" id="portfolio">
	<div class="main-of-page">
		<?php get_template_part('tpl','portfolio'); ?>
	</div>
</div><!-- portfolio -->

<!-- ABOUT -->
<div class="scrollpage page_about" id="about">
	<div class="main-of-page">
		<div class="content">
			<div class="content-part">
				<div class="content-centric cf">
					<div class="main-column scrollme" id="container_a">
						<div id="container-content_a">
					    <?php
							$about_pageid = get_option('about_pageid');
		    			$about_args = array(
								'page_id'   => $about_pageid,
								'post_status' => 'publish'
							);
							query_posts($about_args);
							while ( have_posts() ) : the_post();
					    	the_content();
							endwhile;
							wp_reset_query();
					    	?>
						</div>
					</div>
					<div id="scrollbar_a" class="scrollbar-vert hideme"><div id="handle_a" class="handle-vert"></div></div>
				</div>
			</div>
			<aside class="sidebar">
				<?php
				$attr = array(
					'class'	=> "portrait"
				);
				echo get_the_post_thumbnail($about_pageid, 'portrait', $attr);
				?>
			</aside>
		</div>
	</div>
	<script type="text/javascript">
		mampeScroll('_a');
	</script>
</div><!-- about -->

<!-- CONTACT -->
<div class="scrollpage page_contact" id="contact">
	<div class="main-of-page">
		<?php get_template_part('tpl','contact'); ?>
	</div>
</div><!-- contact -->
<?php 
get_footer();