<?php
get_header();

$blog_args = array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'paged' => $paged
);
$blog_query = new WP_Query($blog_args);
if($blog_query->have_posts()): ?>
    <ul> PAGE BLOG
        <?php while($blog_query->have_posts()):$blog_query->the_post(); ?>
            <li>
                <?php the_title(); ?>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif;
wp_reset_postdata();

get_footer();
?>