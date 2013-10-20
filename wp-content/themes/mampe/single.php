<?php
get_header();
the_post();
$t_leng = mb_strlen(get_the_title());
$cats = get_the_category($post->ID);
if ($cats) {
	$cat_id = $cats[0]->term_id;
	$cat_link = get_category_link($cat_id);
}

?>
<div class="content">
	<div class="content-part">
		<div class="content-centric cf <?php echo ($t_leng > 35)? 'long' : 'short' ?>">
			<h2>
				<?php the_title(); ?>
			</h2>
			<div class="main-column scrollme" id="container">
				<div id="container-content" class="post-content">
			    	<?php the_content(); ?>
				</div>
			</div>
			<div id="scrollbar" class="scrollbar-vert hideme"><div id="handle" class="handle-vert"></div></div>
			<p class="back_to"><a href="<?php echo $cat_link; ?>">Back to projects</a></p>
		</div>
	</div>
	<aside class="sidebar">
		<?php get_sidebar(); ?>
	</aside>
</div>
<script type="text/javascript">
	mampeScroll();
	// new HumbleBox($$('.content a img'));
	
	window.addEvent('domready', function(){
		$$('#container-content img !> a:not([target="_blank"])').cerabox({
			animation: 'ease',
			displayTitle: false,
			clickToClose: true
		});
	});
</script>
<?php 
get_footer();