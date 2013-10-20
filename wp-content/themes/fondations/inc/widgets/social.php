<?php
class social_Widget extends WP_Widget {
    function social_Widget(){parent::WP_Widget(false, 'Social Widget');}
    function form($instance){}
    function update($new_instance, $old_instance) {return $new_instance;}
    function widget($args, $instance) {
        echo $args['before_widget'];
        ?>
        <ul class="cf">
            <?php 
            if (get_option('tp_facebook'))
                echo'<li><a target="_blank" class="facebook_link" href="'.get_option('tp_facebook').'" title="Facebook">f</a></li>';
            if (get_option('tp_twitter'))
                echo '<li><a target="_blank" class="twitter_link" href="http://www.twitter.com/'.get_option('tp_twitter').'" title="Twitter">t</a></li>';
            if (get_option('tp_behance')) 
                echo'<li><a target="_blank" class="behance_link" href="'.get_option('tp_behance').'" title="Behance">Behance</a></li>';
            if (get_option('tp_linkedin'))
                echo'<li><a target="_blank" class="linkedin_link" href="'.get_option('tp_linkedin').'" title="LinkedIn">l</a></li>';
            if (get_option('tp_googleplus'))
                echo'<li><a target="_blank" class="google_link" href="'.get_option('tp_googleplus').'" title="Google+">g</a></li>';
            ?>
        </ul>
        <?php
        echo $args['after_widget'];
    }

}
