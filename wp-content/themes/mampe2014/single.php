<?php get_header();
the_post();
$post_id = get_the_ID();
    ?>
<div class="blabla columns-y">
    <div class="thumb"><img src="<?php echo fon_get_thumb_url('large', get_the_ID()); ?>" alt="<?php the_title_attribute(); ?>" /></div>
    <h1 class="blabla-title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>
<?php
get_footer();