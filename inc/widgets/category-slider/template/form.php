<?php
// Security Check
defined('ABSPATH') || die();

?>
<p class="mk-widget-form category-slider-widget-form">
    
    <?php foreach($categories as $category): ?>
    <div class="input-wrapper">
        <img src="<?php echo esc_attr($instance[$category['id']]); ?>" alt="" class="preview-image">
        <label for=""><?php echo $category['name']; ?></label>
        <br>
        <input name="<?php echo $this->get_field_name($category['id']); ?>" type="hidden" class="image-url" value="<?php echo esc_attr($instance[$category['id']]); ?>">
        <input type="button" class="add-image-button" value="Add Image">
        <input type="button" class="delete-image-button" value="Delete Image">
    </div>
    <?php endforeach; ?>
    
</p>

<script>
(function($){$(document).ready(function(){
    var block = $('.input-wrapper'),
        add_image = block.find('.add-image-button'),
        delete_image = block.find('.delete-image-button');
       
    add_image.on('click', function(e){
        e.preventDefault();
        frame = wp.media({
            title: "Select category background image.",
            button: {
                text: 'Use this media'
            },
            multiple: false
        });
        frame.open();
        frame.on('select', function(){
            var attachment = frame.state().get('selection').first().toJSON();
            $(e.target).parent().find('.preview-image').attr('src', attachment.url);
            $(e.target).parent().find('.image-url').val(attachment.url.toString()).change();
        });

    });
    delete_image.on('click', function(e){
        e.preventDefault();
        $(e.target).parent().find('.preview-image').attr('src', '');
        $(e.target).parent().find('.image-url').val('').change();
    });
})})(jQuery)
</script>

<style>
    .category-slider-widget-form .input-wrapper{
        padding: 1rem 0.5rem;
        margin: 1rem 0;
    }
    .category-slider-widget-form .input-wrapper label{
        display: inline-block;
        font-size: 1.3rem;
        font-weight: 700;
        margin: 0.5rem 0;
    }
</style>