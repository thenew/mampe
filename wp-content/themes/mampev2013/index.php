<?php get_header();

$index_args = array(
    'post_type'      => 'portfolio',
    'posts_per_page' => 12
);
$index_query = new WP_Query($index_args);
if($index_query->have_posts()):
        /*while($index_query->have_posts()):$index_query->the_post();
            $post_id = get_the_ID();
        endwhile;
    endif;*/

            ?>



        <ul id="js-packery" class="col-list cf">
            <?php
            $index_posts_count = 0;
            /*for ($i=0; $i < 5; $i++) { $index_posts_count++; ?>
                <li class="item"><div class="work-item">dd <?php echo $index_posts_count; ?></div></li>
            <?php }*/ ?>
            <?php
            $index_posts_count = 0;
            while($index_query->have_posts()):$index_query->the_post(); $index_posts_count++;
                $post_id = get_the_ID();
                $thumb = fon_get_thumb( 't280', $post_id );
                ?>
                <li class="item">
                    <div class="work-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="thumb" style="background-image: url(<?php echo $thumb[0]; ?>);" data-width="<?php echo $thumb[1]; ?>" data-height="<?php echo $thumb[2]; ?>"></div>
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