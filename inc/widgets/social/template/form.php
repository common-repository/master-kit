<?php
// Security Check
defined('ABSPATH') || die();

?>
<p class="mk-widget-form">
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('facebook-url'); ?>"><?php _e('Facebook URL', 'master-kit')?></label>
        <input type="text" class="" id="<?php echo $this->get_field_id('facebook-url'); ?>" name="<?php echo $this->get_field_name('facebook-url'); ?>" value="<?php echo esc_attr( $instance['facebook-url'] ); ?>">
    </div>
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('twitter-url'); ?>"><?php _e('Twitter URL', 'master-kit')?></label>
        <input type="text" class="" id="<?php echo $this->get_field_id('twitter-url'); ?>" name="<?php echo $this->get_field_name('twitter-url'); ?>" value="<?php echo esc_attr( $instance['twitter-url'] ); ?>">
    </div>
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('youtube-url'); ?>"><?php _e('Youtube URL', 'master-kit')?></label>
        <input type="text" class="" id="<?php echo $this->get_field_id('youtube-url'); ?>" name="<?php echo $this->get_field_name('youtube-url'); ?>" value="<?php echo esc_attr( $instance['youtube-url'] ); ?>">
    </div>
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('pinterest-url'); ?>"><?php _e('Pinterest URL', 'master-kit')?></label>
        <input type="text" class="" id="<?php echo $this->get_field_id('pinterest-url'); ?>" name="<?php echo $this->get_field_name('pinterest-url'); ?>" value="<?php echo esc_attr( $instance['pinterest-url'] ); ?>">
    </div>
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('instagram-url'); ?>"><?php _e('Instagram URL', 'master-kit')?></label>
        <input type="text" class="" id="<?php echo $this->get_field_id('instagram-url'); ?>" name="<?php echo $this->get_field_name('instagram-url'); ?>" value="<?php echo esc_attr( $instance['instagram-url'] ); ?>">
    </div>
    <br />
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('color'); ?>"><?php _e('Color', 'master-kit'); ?> </label>
        <input type="text" class="color-picker" id="<?php echo $this->get_field_id('color'); ?>" name="<?php echo $this->get_field_name('color'); ?>" value="<?php echo esc_attr( $instance['color'] ); ?>">
    </div>
    <div class="inpu-wrapper">
        <label for="<?php echo $this->get_field_id('hover-color'); ?>"><?php _e('Hover Color', 'master-kit'); ?> </label>
        <input type="text" class="color-picker" id="<?php echo $this->get_field_id('hover-color'); ?>" name="<?php echo $this->get_field_name('hover-color'); ?>" value="<?php echo esc_attr( $instance['hover-color'] ); ?>">
    </div>
</p>

<script>
    (function($){
        $(document).ready(function(){
            $('.color-picker').wpColorPicker({
                change: function(e, ui){
                    $(e.target).val(ui.color.toString());
                    $(e.target).trigger('change');
                }
            });
        });
    })(jQuery)
</script>