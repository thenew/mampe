<?php get_header();

$index_args = array(
    'post_type'      => 'post',
    'posts_per_page' => 12
);
$index_query = new WP_Query($index_args);
if($index_query->have_posts()):
    ?>
    <ul id="js-packery" class="col-list cf">
        <?php
        $index_posts_count = 0;
        while($index_query->have_posts()):$index_query->the_post(); $index_posts_count++;
            $post_id = get_the_ID();
            $thumb = fon_get_thumb( 't280', $post_id );
            $thumb_large = fon_get_thumb( 'large', $post_id );
            ?>
            <li class="item">
                <div class="post-item">
                    <a href="<?php the_permalink(); ?>">
                        <div class="thumb dynamic-height" style="background-image: url(<?php echo $thumb[0]; ?>);height: <?php echo $thumb[2]; ?>px;" data-full-src="<?php echo $thumb_large[0]; ?>" data-width="<?php echo $thumb[1]; ?>" data-height="<?php echo $thumb[2]; ?>"></div>
                    </a>
                    <div class="blabla">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        </a>
                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                    </div>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif;
wp_reset_postdata();
get_footer();