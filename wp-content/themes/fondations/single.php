<?php get_header(); ?>

<div id="main">
    
    <?php if(have_posts()) : the_post(); ?>

    <?php endif; ?>

</div>

<?php 
get_sidebar();
get_footer();