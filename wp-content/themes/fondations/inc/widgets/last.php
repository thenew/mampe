<?php
class last_Widget extends WP_Widget {
    function last_Widget(){parent::WP_Widget(false, 'Have you ever seen');}
    function form($instance){}
    function update($new_instance, $old_instance) {return $new_instance;}
    function widget($args, $instance) {
        echo $args['before_widget'];

            $q_args = array(
                'post_type'      => array('portfolio'),
                'orderby'        => 'date',
                'post_status '   => 'publish',
                'posts_per_page' => 7
            );
            query_posts($q_args);
            if(have_posts()):
                echo '<ul>';
                while(have_posts()) : the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
                <?php
                endwhile;
                echo '</ul>';
            endif;
            wp_reset_query();

        echo $args['after_widget'];
    }

}
