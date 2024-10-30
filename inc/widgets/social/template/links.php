<?php 
// Security check
defined('ABSPATH') || die();

wp_enqueue_style('master-kit-font-awsome-style');

?>
<div class='mk-social-links'>
    <?php if(isset($instance['facebook-url']) && !empty($instance['facebook-url'])): ?>
        <a href="<?php echo esc_attr($instance['facebook-url']); ?>" target="_blank">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
    <?php endif; ?>
    <?php if(isset($instance['twitter-url']) && !empty($instance['twitter-url'])): ?>
        <a href="<?php echo esc_attr($instance['twitter-url']); ?>" target="_blank">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
    <?php endif; ?>
    <?php if(isset($instance['youtube-url']) && !empty($instance['youtube-url'])): ?>
        <a href="<?php echo esc_attr($instance['youtube-url']); ?>" target="_blank">
            <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
    <?php endif; ?>
    <?php if(isset($instance['pinterest-url']) && !empty($instance['pinterest-url'])): ?>
        <a href="<?php echo esc_attr($instance['pinterest-url']); ?>" target="_blank">
            <i class="fa fa-pinterest" aria-hidden="true"></i>
        </a>
    <?php endif; ?>
    <?php if(isset($instance['instagram-url']) && !empty($instance['instagram-url'])): ?>
        <a href="<?php echo esc_attr($instance['instagram-url']); ?>" target="_blank">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
    <?php endif; ?>
    <?php // $instance['color'] = isset($instance['color']) && !empty($instance['color']) ? '' : ''; ?>
</div>

<style>
    <?php echo '#' . $this->id; ?> .mk-social-links a i{
        color: <?php echo $instance['color']; ?>;
        margin: 0 0.2rem;
        border: 1px solid <?php echo $instance['color']; ?>;
        padding: 0.3rem;
    }
    <?php echo '#' . $this->id; ?> .mk-social-links a i:hover{
        background-color: <?php echo $instance['color']; ?>;
        color: <?php echo $instance['hover-color']; ?>;
        border: 1px solid transparent;
    }
</style>