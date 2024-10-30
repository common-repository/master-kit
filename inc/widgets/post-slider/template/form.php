<?php
// Security Check
defined('ABSPATH') || die();

?>
<p class="mk-widget-form">
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('post-type'); ?>"><?php _e('Post Type', 'master-kit')?></label>
        <select name="<?php echo $this->get_field_name('post-type'); ?>" id="<?php echo $this->get_field_id('post-type'); ?>">
            <option <?php if($instance['post-type'] == 'recent') echo 'selected'; ?> value="recent"><?php _e('Recent posts', 'master-kit'); ?></option>
            <option <?php if($instance['post-type'] == 'sticky') echo 'selected'; ?>  value="sticky"><?php _e('Sticky posts', 'master-kit'); ?></option>
        </select>
    </div>
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('post-number'); ?>"><?php _e('Number of Posts', 'master-kit')?></label>
        <input type="text" class="" id="<?php echo $this->get_field_id('post-number'); ?>" name="<?php echo $this->get_field_name('post-number'); ?>" value="<?php echo esc_attr( $instance['post-number'] ); ?>">
    </div>
</p>