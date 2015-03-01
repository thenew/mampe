<?php get_header();
the_post();
$post_id = get_the_ID();
?>
<div class="h-container">
<div class="blabla columns-y">
    <div class="thumb">
        <a href="<?php echo fon_get_thumb_url('full', $post_id); ?>">
            <img src="<?php echo fon_get_thumb_url('large', $post_id); ?>" alt="<?php the_title_attribute(); ?>" />
        </a>
    </div>
    <h1 class="blabla-title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>
</div>
<?php
get_footer();