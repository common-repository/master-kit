<?php
// Security Check
defined('ABSPATH') || die();

?>
<p class="mk-widget-form form">
    
    <div class="input-wrapper">
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'master-kit'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>">
    </div>

    <div class="input-wrapper">
        <label for="<?php echo $this->get_field_id('post-type'); ?>"><?php _e('Type', 'master-kit'); ?></label>
        <select name="<?php echo $this->get_field_name('post-type'); ?>" id="<?php echo $this->get_field_id('post-type'); ?>">
            <?php foreach($post_type_list as $type): ?>
            <option value="<?php echo $type['slug']; ?>" <?php if($instance['post-type'] == $type['slug']) echo "selected"; ?>><?php _e($type['title'], 'master-kit'); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div class="input-wrapper">
        <label for="<?php echo $this->get_field_id('post-number'); ?>"><?php _e('Number of Post', 'master-kit'); ?></label>
        <input type="number" id="<?php echo $this->get_field_id('post-number'); ?>" name="<?php echo $this->get_field_name('post-number'); ?>" value="<?php echo esc_attr($instance['post-number']); ?>">
    </div>
</p>