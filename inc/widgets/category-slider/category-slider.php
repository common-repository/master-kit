<?php 
// Security check
defined('ABSPATH') || die();

if( !class_exists('MasterKitCategorySliderWidget') ):

class MasterKitCategorySliderWidget extends WP_Widget{

    public function __construct(){
        parent::__construct(
            'mkcs_widget',
            __('MasterKit Category Slider', 'master-kit'),
            array(
                'description' => __('Add category slider for your blog.', 'master-kit'),
                'customize_selective_refresh' => true,
            )
        );
        
        add_action('admin_enqueue_scripts', array(&$this, 'enqueue_scripts'));
    }

    public function enqueue_scripts(){

        wp_enqueue_media();
        // wp_enqueue_style('wp-color-picker');
        // wp_enqueue_script('wp-color-picker');

    }

    public function widget($args, $instance){
        echo $args['before_widget'];
        include "template" . DIRECTORY_SEPARATOR . 'category-slider.php';
        echo $args['after_widget'];
    }

    public function form($instance){

        $category_objects = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ) );

        $categories = array();

        foreach($category_objects as $object){
            $instance[$object->term_id] = ( isset($instance[$object->term_id]) && !empty($instance[$object->term_id]) ) ? $instance[$object->term_id] : '';
            $categories[] = array(
                'id' => $object->term_id,
                'name' => esc_attr($object->name),
                'image_url' => esc_attr( isset($instance[$object->term_id]) && !empty($instance[$object->term_id]) ? $instance[$object->term_id] : '' ),
            );
        }

        include "template" . DIRECTORY_SEPARATOR . 'form.php';
    }

}

endif;