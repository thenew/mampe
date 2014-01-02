<?php get_header();
while (have_posts()) : the_post();
    ?>
    <div class="page-wrap">
        <div class="blabla">
            <?php the_content(); ?>
        </div>
    </div>
    <?php
endwhile;
wp_reset_query();

get_footer();