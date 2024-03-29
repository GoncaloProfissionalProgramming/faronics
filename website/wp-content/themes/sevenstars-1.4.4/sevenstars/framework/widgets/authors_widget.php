<?php

class tt_AuthorsWidget extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'tt-authors-widget', 'description' => 'Authors list.');
        parent::__construct(false, ': Authors list', $widget_ops);
    }

    function widget($args, $instance) {
        extract(array_merge(array(
                    'title' => '',
                        ), $instance));

        $authors = get_users(array('orderby'=>'post_count','order'=>'DESC'));

        if (isset($before_widget))
            echo $before_widget;

        echo '<aside id="tt_authors_widget" class="widget tt-authors-widget tt-widget">';

        if ($title != '')
            echo $args['before_title'] . $title . $args['after_title'];

        echo '<ul>';
        foreach ($authors as $author) {
            echo '<li>';
            echo '<span class="widget-thumb">';
            echo get_avatar($author->ID, 55);
            echo '</span>';
            echo '<a href="'.get_author_posts_url( $author->ID, $author->user_nicename ).'" class="widget-item-title" title="">' . $author->display_name . '</a>';
            echo '<ul>
                    <li class="comments-number"><a href="'.get_author_posts_url( $author->ID, $author->user_nicename ).'" title="">'.count_user_posts($author->ID).' '. (count_user_posts($author->ID)>1 ? __('posts', 'sevenstars') : __('post', 'sevenstars')) .'</a></li>
                  </ul>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</aside>';

        if (isset($after_widget))
            echo $after_widget;

        wp_reset_query();
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number_posts'] = strip_tags($new_instance['number_posts']);
        return $instance;
    }

    function form($instance) {

        //Output admin widget options form
        extract(shortcode_atts(array(
                    'title' => '',
                        ), $instance));
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e("Title:", 'sevenstars'); ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>"  />
        </p>
        <?php
    }

}

add_action('widgets_init', function(){
    register_widget( 'tt_AuthorsWidget' );
});