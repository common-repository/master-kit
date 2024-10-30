<?php 
// Security check
defined('ABSPATH') || die();

wp_enqueue_style('master-kit-font-awsome-style');

?>
<?php if(isset($instance['title']) && !empty($instance['title'])): ?>
    <h3 class='widget-title'><?php echo _e($instance['title'], 'master-kit'); ?></h3>
<?php endif; ?>
<div class='mk-author-widget'>
    <div class="author-avatar-block">
    <div class="author-avatar" style="background-image: url('<?php echo esc_attr($instance['avatar']); ?>'); background-size: cover"></div>
    </div>
    <div class="author-content">
        <h3><?php echo $instance['name'];?></h3>
        <p><?php echo $instance['bio']; ?></p>
    </div>
    <div class="author-social">
        <?php if(isset($instance['facebook-url']) && !empty($instance['facebook-url'])): ?>
            <a href="<?php esc_attr($instance['facebook-url']); ?>">
                <i class="fa fa-facebook"></i>
            </a>
        <?php endif; ?>
        <?php if(isset($instance['twitter-url']) && !empty($instance['twitter-url'])): ?>
            <a href="<?php esc_attr($instance['twitter-url']); ?>">
                <i class="fa fa-twitter"></i>
            </a>
        <?php endif; ?>
        <?php if(isset($instance['youtube-url']) && !empty($instance['youtube-url'])): ?>
            <a href="<?php esc_attr($instance['youtube-url']); ?>">
                <i class="fa fa-youtube"></i>
            </a>
        <?php endif; ?>
        <?php if(isset($instance['pinterest-url']) && !empty($instance['pinterest-url'])): ?>
            <a href="<?php esc_attr($instance['pinterest-url']); ?>">
                <i class="fa fa-pinterest"></i>
            </a>
        <?php endif; ?>
        <?php if(isset($instance['instagram-url']) && !empty($instance['instagram-url'])): ?>
            <a href="<?php esc_attr($instance['instagram-url']); ?>">
                <i class="fa fa-instagram"></i>
            </a>
        <?php endif; ?>
    </div>
</div>

<script type="text/javascript">
</script>

<style>
    .mk-author-widget{
        background-color: #f3f3f3;
        padding: 1.5rem 0;
    }
    .mk-author-widget .author-avatar-block{
        
    }

    .mk-author-widget .author-avatar-block .author-avatar{
        height: 150px;
        width: 150px;
        border-radius: 50%;
        margin: 0 auto;
        
    }

    .mk-author-widget .author-content{
        padding: 1rem;
    }

    .mk-author-widget .author-content h3{
        text-align: center;
    }

    .mk-author-widget .author-content p{
        text-align: justify;
    }

    .mk-author-widget .author-social{
        margin: 0 auto;
        text-align: center;
    }

    .mk-author-widget .author-social a i{
        padding: 1rem;
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
    
    }

    /* Extra large devices (large desktops, 1200px and up) */
    @media (min-width: 1200px) {  
    
    }
</style>