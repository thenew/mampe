<?php get_header();

$q_args = array(
    'name' => 'about',
    'post_type' => 'page',
    'posts_per_page' => 1
);
query_posts($q_args);
while (have_posts()) : the_post();
    ?>
    <div class="about-page">
        <div class="cf cols">
            <div class="map-col">
                <div class="map">
                    <?php
                    $exp_args = array(
                        'post_type'      => 'experience',
                        'posts_per_page' => -1
                    );
                    $exp_query = new WP_Query($exp_args);
                    if($exp_query->have_posts()): ?>
                        <ul>
                            <?php while($exp_query->have_posts()):$exp_query->the_post();
                                $post_id = get_the_id();
                                $x = get_post_meta( $post_id, 'position_x', 1 );
                                $y = get_post_meta( $post_id, 'position_y', 1 );
                                $types_slug = array();
                                $types = get_the_terms( $post_id, 'type' );
                                if( ! empty( $types ) ) {
                                    foreach ($types as $type) {
                                        $types_slug[] = 'type-'.$type->slug;
                                    }
                                }
                                ?>
                                <li class="exp <?php echo implode(' ', $types_slug); if($x>400) echo ' label-left'; ?>" style="left:<?php echo $x; ?>px; top:<?php echo $y; ?>px;">
                                    <div class="dot"></div>
                                    <div class="label">
                                        <div class="content">
                                            <h2 class="title"><?php the_title(); ?></h2>
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif;
                    wp_reset_postdata();


                    ?>
                </div>
                <div class="types">
                    <?php
                    $types = get_terms( 'type', array( 'hide_empty' => '0' ) );
                    if( ! empty( $types ) ) { ?>
                        <ul class="types-list">
                            <?php foreach ($types as $type) { ?>
                                <li class="<?php echo 'type-'.$type->slug; ?>"><div class="dot"></div><?php echo $type->name; ?></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="content-col">
                <div class="blabla">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
endwhile;
wp_reset_query();