<?php get_header();
while (have_posts()) : the_post();
    ?>
    <div class="blabla">
        <?php the_content(); ?>
    </div>
    <?php
endwhile;
wp_reset_query();

get_footer();