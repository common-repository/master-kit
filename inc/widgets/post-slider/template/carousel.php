<?php 
// Security check
defined('ABSPATH') || die();

wp_enqueue_style('master-kit-font-awsome-style');
wp_enqueue_style('master-kit-owl-carousel-theme-style');
wp_enqueue_script('master-kit-owl-carousel-script');

global $post;

$tag_colours = array(
    '#6741dc',
    '#1f5dea',
    '#4dcf8f',
    '#eba845'
);
echo get_option('widget-options');
?>
<div class="row mk-post-slider">
    <div class="col">
        <div class="owl-carousel owl-theme">
        <?php while($slider_posts->have_posts()): $slider_posts->the_post(); ?>
            <div class="slider-post">
                <?php $thubmnail_url = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : plugin_dir_url(__FILE__) . '../../../../img/blank-image.jpg';?>
                <div class="slider-image-wrapper" style="background-image: url(<?php echo $thubmnail_url; ?>);height: 100%;">
                </div>
                <div class="slider-content-wrapper">
                    <div class="content-top">
                        <?php
                            $post_tags = get_the_tags();
                            if($post_tags){
                                foreach($post_tags as $tag):
                                ?>
                                <div class="slider-post-tags" style="background-color:<?php echo $tag_colours[rand(0,3)];?>;">
                                    <?php echo $tag->name; ?>
                                </div>
                                <?php
                                endforeach;
                            }
                        ?>
                    </div>
                    <div class="content-bottom">
                        <h2 class="slider-post-title">
                            <a href="<?php echo get_post_permalink(); ?>"><?php echo get_the_title(); ?></a>
                        </h2>
                        <p><small style="font-size: 0.8rem; text-transform: uppercase;"><i class="fa fa-tag"></i> <?php $categories = get_the_category(); echo $categories[0]->name; ?></small></p>
                        <p>
                            <?php echo get_avatar($post->post_author, 32); ?> <i><a href="<?php the_author_link(); ?>"><?php echo get_the_author_meta('display_name'); ?></a></i> 
                            &nbsp;&nbsp;<i class="fa fa-calendar"></i> <i><?php echo get_the_modified_time('F jS, Y'); ?></i>
                        </p>
                    </div>
                </div>
            </div>
                    
        <?php endwhile; ?>
        </div>
    </div>
</div>

<script type="text/javascript">
(function($){
    $(document).ready(function(){
        $('.mk-post-slider .owl-carousel').owlCarousel({
            loop: true,
            lazyLoad: false,
            checkVisibility: false,
            responsive:{
                0:{
                    items:1,
                },
                360: {
                    items: 1,
                },
                576:{
                    items:1,
                },
                768:{
                    items:2,
                },
                992: {
                    items: 3,
                },
            }
        });
    });
})(jQuery)
</script>

<style>
.post-carousel-container{
    margin-top: 0.5rem;
    background-color: #fff;
    padding: 0;
}

.post-carousel-container .customize-partial-edit-shortcut-button{
    top: 15px;
    left: 15px;
}

.slider-post{
    height: 500px;
    /* margin: 0 -40px; */
}

.slider-post .slider-image-wrapper{
    filter: brightness(0.5);
    width: 100vw;
}

.slider-post .slider-content-wrapper{
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    color: #fff;
    padding: 1rem;
}

.slider-post .slider-content-wrapper .content-top{
    position: absolute;
    top: 10px;
    left: 36px;
}

.slider-post .slider-content-wrapper .content-top .slider-post-tags{
    display: inline-block;
    padding: 0.3rem;
    margin: 0.2rem;
    font-size: 0.6rem;
    font-weight: 600;
    border-radius: 3px;
    color: #fff;
    text-transform: uppercase;
}

.slider-post .slider-content-wrapper .content-bottom {
    position: absolute;
    bottom: 0;

}

.slider-post .slider-content-wrapper .content-bottom a{
    color: #fff;
}

.slider-post .slider-content-wrapper .content-bottom a:hover{
    color: #fff;
    text-decoration: none;
}

.slider-post .slider-content-wrapper .content-bottom .avatar{
    width: 32px;
    height: auto;
    border-radius: 50%;
    display: inline;
    border: 3px solid #fff;
}

.slider-post .slider-content-wrapper .content-bottom .slider-post-title a{
    font-size: 1.5rem;
    color: #fff;
}

.slider-post .slider-content-wrapper .content-bottom .slider-post-title a:hover{
    color: #fff;
}

.mk-post-slider .owl-carousel .slider-image-wrapper{
    background-size: cover;
}

/* Responsive design */
/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {  
    
}

/* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
@media (min-width: 768px) {  
    .mk-post-slider .owl-carousel .slider-image-wrapper{
        background-size: contain;
    }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
    
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {  
    
}

</style>