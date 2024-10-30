<?php 
// Security check
defined('ABSPATH') || die();

wp_enqueue_style('master-kit-font-awsome-style');
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
?>
<div class='mk-category-slider'>
    <div class="owl-carousel">
        <?php foreach($categories as $category): ?>
            <?php if(isset($instance[$category->term_id]) && !empty($instance[$category->term_id])): ?>
            <div class="category-wrapper">
                <div class="category-box-overlay" style="background-image: url('<?php echo $instance[$category->term_id]; ?>')"></div>
                <div class="category-content">
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                        <?php echo $category->name; ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>    
</div>

<script type="text/javascript">
(function($){
    $(document).ready(function(){
        $('.mk-category-slider .owl-carousel').owlCarousel({
            loop: true,
            center: true,
            // autoplay: false,
            lazyLoad: false,
            // autoplayTimeout: 5000,
            // autoplayHoverPause: true,
            checkVisibility: false,
            // rewind: true,
            responsive:{
                0:{
                    items:1,
                },
                360: {
                    items: 1,
                },
                576:{
                    items:3,
                },
                1000:{
                    items:3,
                }
            }
        });
    });
})(jQuery)
</script>

<style>
    .mk-category-slider{
        display: flex;
    }
    .mk-category-slider .category-wrapper{
        border: 1px solid gray;
        height: 120px;
        width: 160px;
        display: inline-block;
        margin: 0px auto;
        position: relative;
    }
    .mk-category-slider .category-wrapper .category-box-overlay{
        background-color: #000;
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        filter: brightness(0.5);
    }
    .mk-category-slider .category-wrapper .category-content{
        position: absolute;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        height: 100%;
        color: #fff;
        font-size: 1.2rem;
        font-weight: 800;
    }

    .mk-category-slider .category-wrapper .category-content a{
        color: #fff;
    }

    .mk-category-slider .owl-carousel .owl-item {
        display: inline-block !important;
        width: 150px !important;
        margin: 0 0.5rem;
        padding: 0;
    }

    
    /* Responsive design */
    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 576px) {  
    
    }
    
    /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
    @media (min-width: 768px) {  
    
    }
    
    /* Large devices (desktops, 992px and up) */
    @media (min-width: 992px) {
        .mk-category-slider .owl-carousel .owl-item{
            width: 200px !important;
            margin: 0 1rem;
        }
    }
    
    /* Extra large devices (large desktops, 1200px and up) */
    @media (min-width: 1200px) {  
        
    }
    
</style>