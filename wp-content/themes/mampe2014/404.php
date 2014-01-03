<?php get_header();
?>
<div class="page-wrap">
    <div class="blabla">
        <h1 class="blabla-title">Page not found</h1>
        See my <a href="<?php echo site_url('/'); ?>">projects</a>, my <a href="<?php echo site_url('/blog/' ); ?>">posts</a>
        <br />or pick one randomly below.
    </div>
</div>
<?php
$pagenotfound_args = array(
    'post_type'      => array('portfolio', 'post'),
    'posts_per_page' => 36,
    'orderby' => 'rand'
);
$pagenotfound_query = new WP_Query($pagenotfound_args);
if($pagenotfound_query->have_posts()):
    ?>
    <ul id="js-packery" class="cf col-list col-list-404">
        <?php
        $pagenotfound_posts_count = 0;
        while($pagenotfound_query->have_posts()): $pagenotfound_query->the_post(); $pagenotfound_posts_count++;
            $post_id = get_the_ID();
            $thumb = fon_get_thumb( 't280', $post_id );
            $thumb_large = fon_get_thumb( 'large', $post_id );
            ?>
            <li class="item">
                <div class="work-item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="thumb" style="background-image: url(<?php echo $thumb[0]; ?>);" data-full-src="<?php echo $thumb_large[0]; ?>" data-width="<?php echo $thumb[1]; ?>" data-height="<?php echo $thumb[2]; ?>"></div>
                        <div class="details">
                            <h2 class="title"><?php the_title(); ?></h2>
                            <div class="period"><?php echo get_post_meta( $post_id, 'period_start', 1 ) .' &mdash; '. get_post_meta( $post_id, 'period_end', 1 ); ?></div>
                        </div>
                    </a>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif;
wp_reset_postdata();

get_footer();