<?php
// Security Check
defined('ABSPATH') || die();

?>
<div class="mk-widget-form form author">
    
    <div class="input-wrapper">
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'master-kit'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>">
    </div>

    <div class="input-wrapper">
        <label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Name', 'master-kit'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" value="<?php echo esc_attr($instance['name']); ?>">
    </div>

    <div class="input-wrapper media">
        <label for="<?php echo $this->get_field_id('avatar'); ?>"><?php _e('Avatar', 'master-kit'); ?></label>
        <br>
        <img class="image-display" src="<?php echo esc_attr($instance['avatar']); ?>" alt="">
        <input type="hidden" id="<?php echo $this->get_field_id('avatar'); ?>" name="<?php echo $this->get_field_name('avatar'); ?>" value="<?php echo esc_attr($instance['avatar']); ?>">
        <button class="button add-media">Add Image</button>
        <button class="button remove-media">Remove Image</button>
    </div>

    <div class="input-wrapper">
        <label for="<?php echo $this->get_field_id('bio'); ?>"><?php _e('Bio', 'master-kit'); ?></label>
        <textarea name="<?php echo $this->get_field_name('bio'); ?>" id="<?php echo $this->get_field_id('bio'); ?>" cols="" rows="10"><?php echo esc_attr($instance['bio']); ?></textarea>
    </div>

    <div class="input-wrapper">
        <label for="<?php echo $this->get_field_id('facebook-url'); ?>"><?php _e('Facebook', 'master-kit'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('facebook-url'); ?>" name="<?php echo $this->get_field_name('facebook-url'); ?>" value="<?php echo esc_attr($instance['facebook-url']); ?>">
    </div>

    <div class="input-wrapper">
        <label for="<?php echo $this->get_field_id('twitter-url'); ?>"><?php _e('Twitter', 'master-kit'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('twitter-url'); ?>" name="<?php echo $this->get_field_name('twitter-url'); ?>" value="<?php echo esc_attr($instance['twitter-url']); ?>">
    </div>

    <div class="input-wrapper">
        <label for="<?php echo $this->get_field_id('youtube-url'); ?>"><?php _e('Youtube', 'master-kit'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('youtube-url'); ?>" name="<?php echo $this->get_field_name('youtube-url'); ?>" value="<?php echo esc_attr($instance['youtube-url']); ?>">
    </div>

    <div class="input-wrapper">
        <label for="<?php echo $this->get_field_id('pinterest-url'); ?>"><?php _e('Pinterest', 'master-kit'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('pinterest-url'); ?>" name="<?php echo $this->get_field_name('pinterest-url'); ?>" value="<?php echo esc_attr($instance['pinterest-url']); ?>">
    </div>

    <div class="input-wrapper">
        <label for="<?php echo $this->get_field_id('instagram-url'); ?>"><?php _e('Instagram', 'master-kit'); ?></label>
        <input type="text" id="<?php echo $this->get_field_id('instagram-url'); ?>" name="<?php echo $this->get_field_name('instagram-url'); ?>" value="<?php echo esc_attr($instance['instagram-url']); ?>">
    </div>

</div>

<script>
(function($){$(document).ready(function(){
    
    $('.mk-widget-form .media .add-media').on('click', function(e){
        e.preventDefault();
       
        frame = wp.media({
            title: "Select author avatar",
            button: {
                text: 'Use this media'
            },
            multiple: false
        });

        frame.open();

        frame.on('select', function(){
            var attachment = frame.state().get('selection').first().toJSON();
            $(e.target).parent().find("#<?php echo $this->get_field_id('avatar'); ?>").val(attachment.url.toString()).change();
            $(e.target).parent().find('.image-display').attr("src", attachment.url.toString());
        });
    });

    $('.mk-widget-form .media .remove-media').on('click', function(e){
        e.preventDefault();
        $(e.target).parent().find("#<?php echo $this->get_field_id('avatar'); ?>").val('').change();
        $(e.target).parent().find('.image-display').attr("src", '');
    });

})})(jQuery)
</script>

<style>
.mk-widget-form .media .add-media,
.mk-widget-form .media .remove-media{
   /* margin-top */
}
</style>