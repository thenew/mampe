<?php
get_header();
the_post();
?>
<div class="main-column scrollme" id="container">
	<div id="container-content">
    	<?php the_content(); ?>
	</div>
</div>
<div id="scrollbar" class="scrollbar-vert hideme"><div id="handle" class="handle-vert"></div></div>

<aside class="sidebar">
    <img src="http://placekitten.com/300/444" alt="" />
	<?php get_sidebar(); ?>
</aside>
<script type="text/javascript">
	makeScrollbar($('container'), $('container-content'), $('scrollbar'), $('handle'));
</script>
<?php 
get_footer();