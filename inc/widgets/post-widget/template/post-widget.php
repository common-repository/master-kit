<?php 
// Security check
defined('ABSPATH') || die();

wp_enqueue_style('master-kit-font-awsome-style');
$__meta_key = '__mk_post_view_count';
?>
<h3 class='widget-title'><?php echo _e($instance['title'], 'master-kit'); ?></h3>
<div class='mk-post-widget'>
    <?php while($mk_posts->have_posts()): $mk_posts->the_post(); ?>
    <div class="post-block">
        <?php $thubmnail_url = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : plugin_dir_url(__FILE__) . '../../../../img/blank-image.jpg';?> 
        <div class="image-wrapper" style="background-image: url(<?php echo $thubmnail_url; ?>); background-size: cover; background-repeat: no-repeat;">
           &nbsp;&nbsp;
        </div>
        <div class="content-wrapper">
            <h5><?php echo get_the_title(); ?></h5>
            <div class="tags-block">
                <?php $post_tags = get_the_tags(); ?>
                <?php if($post_tags): ?>
                    <i class='fa fa-tags'></i>
                    <?php foreach($post_tags as $tag): ?>
                    <div class='tag'>
                        <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                
            </div>
            <div class="category-block">
                <i class="fa fa-folder"></i>
                <div class="category">
                    <?php $categories = get_the_category(); ?>
                    <a href="<?php echo get_category_link($categories[0]->term_id); ?>"><?php echo $categories[0]->name; ?></a>
                </div>
                <div class="read-more-block">
                    <a href="<?php echo get_permalink($mk_posts->ID); ?>">... Read More</a>
                </div>
            </div>
        </div>
    </div>
        
    <?php endwhile; ?>
</div>

<script type="text/javascript">
</script>

<style>
    .mk-post-widget .post-block {
        margin-bottom: 0.5rem;
        display: flex;
        background-color: #f3f3f3;
        padding: 0.5rem;
    }

    .mk-post-widget .post-block .image-wrapper{
        width: 34%;
        /* border: 1px solid orange; */
        min-height: 100px;
        display: inline-block;
    }

    .mk-post-widget .post-block .content-wrapper{
        padding: 0.5rem;
        width: 64%;
        /* border: 1px solid green; */
        min-height: 100px;
        display: inline-block;
    }

    .mk-post-widget .post-block .content-wrapper h5{
        margin: 0;
        padding: 0;
        font-weight: 700;
    }

    .mk-post-widget .post-block .content-wrapper .tags-block .tag{
        font-size: 0.8rem;
        display: inline-block;
    }
    
    .mk-post-widget .post-block .content-wrapper .category{
        font-size: 1rem;
        display: inline-block;
    }

    .mk-post-widget .post-block .content-wrapper .read-more-block a{
        font-size: 0.8rem;
        text-transform: lowercase;
        float: right;
    }

    /* Responsive design */
    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 576px) {  
        
    }

    /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
    @media (min-width: 768px) { 
        .mk-post-widget .post-block{
            display: block;
        }

        .mk-post-widget .post-block .image-wrapper,
        .mk-post-widget .post-block .content-wrapper{
            width: 100%;
        }
        
    }

    /* Large devices (desktops, 992px and up) */
    @media (min-width: 992px) {
        .mk-post-widget .post-block .image-wrapper{
            height: 150px;
        }
    }

    /* Extra large devices (large desktops, 1200px and up) */
    @media (min-width: 1200px) {  
        .mk-post-widget .post-block{
            display: flex;
        }

        .mk-post-widget .post-block .image-wrapper{
            width: 39%;
            height: 135px;
        }

        .mk-post-widget .post-block .content-wrapper{
            width: 59%;
        }
    }
</style>