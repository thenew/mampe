<?php get_header(); ?>

<div id="content">
    
    <?php 
    $args = array(
        'post_type'     => 'post',
        'posts_per_page' => '-1',
        'post_status'    => 'publish'
    );
    query_posts($args);
    if(have_posts()) : ?>
        
        <ul>
            <?php $i = 0;
            while (have_posts()) : the_post(); ?>

                <li class="item-<?php echo $i; ?>">

                    <h3><a href="<? the_permalink(); ?>"><?php echo truncated(get_the_title(), 23); ?></a></h3>		
                    <p><?php echo truncated(the_content()); ?></p>
                </li>
            <?php $i++;
            endwhile; ?>
        </ul>
    
    <?php endif;
    wp_reset_query(); ?>

</div>

<?php 
get_sidebar();
get_footer();