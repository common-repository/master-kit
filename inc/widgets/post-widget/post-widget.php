<?php 
// Security check
defined('ABSPATH') || die();

if( !class_exists('MasterKitPostWidget') ):

class MasterKitPostWidget extends WP_Widget{

    public $post_type_list = array(
        array(
            'slug' => 'popular',
            'title' => 'Popular'
        ),
        array(
            'slug' => 'sticky',
            'title' => 'Featured'
        ),
        array(
            'slug' => 'recent',
            'title' => 'Recent'
        )
    );

    public function __construct(){
        parent::__construct(
            'mkp_widget',
            __('MasterKit Post Widget', 'master-kit'),
            array(
                'description' => __('Add different type of post widget in your website.', 'master-kit'),
                'customize_selective_refresh' => true,
            )
        );
        
        add_action('admin_enqueue_scripts', array(&$this, 'enqueue_scripts'));
    }

    public function enqueue_scripts(){

    }

    public function widget($args, $instance){
        
        if(!isset($instance['title'])) $instance['title'] = 'Popular Posts';
        if(!isset($instance['post-type'])) $instance['post-type'] = 'popular';
        if(!isset($instance['post-number'])) $instance['post-number'] = 5;
        
        $mk_posts = '';

        if($instance['post-type'] == 'recent'){
            $mk_posts = new WP_Query(array(
                'ignore_sticky_posts' => true,
                'posts_per_page' => $instance['post-number'],
            ));
        } else if($instance['post-type'] == 'sticky'){
            $mk_posts = new WP_Query(array(
                'ignore_sticky_posts' => true,
                'post__in' => get_option( 'sticky_posts' ),
                'posts_per_page' => $instance['post-number'],
            ));
        } else{
            $mk_posts = new WP_Query(array(
                'meta_key' => '__mk_post_view_count',
                'orderby' => 'meta_value_num',
                'ignore_sticky_posts' => true,
                'posts_per_page' => $instance['post-number'],
            ));
        }

        echo $args['before_widget'];
        include "template" . DIRECTORY_SEPARATOR . 'post-widget.php';
        echo $args['after_widget'];
    }

    public function form($instance){

        $post_type_list = $this->post_type_list;

        // $instance['title'] = (isset($instance['title']) && !empty($instance['title'])) ? $instance['title'] : '';
        if(!isset($instance['title'])) $instance['title'] = '';
        include "template" . DIRECTORY_SEPARATOR . 'form.php';
    }

}

endif;