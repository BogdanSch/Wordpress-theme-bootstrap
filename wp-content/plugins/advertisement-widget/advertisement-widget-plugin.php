<?php
/*
Plugin Name: Advertisement Widget Plugin
Plugin URI: http://ex.com
Description: Simple Advertisement Widget Plugin including banner image and link
Version: 1.0
Author: Bsch
Author URI: http://ex.com
License: GPL2
*/

class Advertisement_Widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'Advertisement_Widget',
            'description' => 'Displays Ads'
        );
        parent::__construct('Advertisement_Widget', 'Advertisement Widget', $widget_ops);
    }

    public function form($instance)
    {
        $instance = wp_parse_args((array) $instance, array('title' => ''));
        $title = $instance['title'];
        $message = esc_attr($instance['message']);
        $link = esc_attr($instance['link']);
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('message'); ?>"><?php _e('Advertisement Banner'); ?></label>
            <textarea rows="4" cols="50" class="widefat" id="<?php echo $this->get_field_id('message'); ?>"
                name="<?php echo $this->get_field_name('message'); ?>"><?php echo $message; ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Ads Link'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('link'); ?>"
                name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo $link; ?>" />
        </p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['message'] = sanitize_textarea_field($new_instance['message']);
        $instance['link'] = sanitize_text_field($new_instance['link']);
        return $instance;
    }

    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $message = $instance['message'];
        $link = $instance['link'];
        ?>
        <?php echo $before_widget; ?>
        <?php if ($title) {
            echo $before_title . $title . $after_title;
        } ?>
        <a href="<?php echo esc_url($link); ?>" target="_blank">
            <img src="<?php echo esc_url($message); ?>" />
        </a>
        <?php echo $after_widget; ?>
    <?php
    }
}
function my_register_custom_widget()
{
    register_widget('Advertisement_Widget');
}
add_action('widgets_init', 'my_register_custom_widget');