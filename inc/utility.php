<?php
defined('ABSPATH') || die();

if(!class_exists('MasterKitPostMetaInfo')):

class MasterKitPostMetaInfo {

    public function __construct(){

        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
        add_action('wp_head', array(&$this, 'single_post_view'));

    }

    public function update_view($post_id){
        $__meta_key = '__mk_post_view_count';
        $view = get_post_meta($post_id, $__meta_key, true);
        $view = ($view == '') ? 0 : $view;
        $view++;
        update_post_meta($post_id, $__meta_key, $view);
    }

    public function single_post_view($post_id){
        if(is_single()){
            if(empty($post_id)){
                global $post;
                $post_id = $post->ID;
            }
            $this->update_view($post_id);
        }       
    }

}

new MasterKitPostMetaInfo();

endif;