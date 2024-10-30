<?php
// Security Check
defined('ABSPATH') || die();

?>
<p class="mk-widget-form">
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email', 'master-kit')?></label>
        <input type="text" class="" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" value="<?php echo esc_attr( $instance['email'] ); ?>">
    </div>
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone', 'master-kit')?></label>
        <input type="text" class="" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" value="<?php echo esc_attr( $instance['phone'] ); ?>">
    </div>
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('address'); ?>"><?php _e('Address', 'master-kit')?></label>
        <input type="text" class="" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" value="<?php echo esc_attr( $instance['address'] ); ?>">
    </div>
</p>