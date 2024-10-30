<?php 
// Security check
defined('ABSPATH') || die();

wp_enqueue_style('master-kit-font-awsome-style');

?>
<div class='mk-contact-info'>
    <?php if(isset($instance['email']) && !empty($instance['email'])): ?>
        <a href="mailto:<?php echo esc_attr($instance['email']); ?>" target="_blank">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            &nbsp;&nbsp;<?php echo esc_attr($instance['email']); ?> 
        </a>
    <?php endif; ?>
    <?php if(isset($instance['phone']) && !empty($instance['phone'])): ?>
        <a href="tel:<?php echo esc_attr($instance['phone']); ?>" target="_blank">
            <i class="fa fa-phone" aria-hidden="true"></i>
            &nbsp;&nbsp;<?php echo esc_attr($instance['phone']); ?>
        </a>
    <?php endif; ?>
    <?php if(isset($instance['address']) && !empty($instance['address'])): ?>
        <a href="<?php echo esc_attr($instance['address']); ?>" target="_blank">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            &nbsp;&nbsp;<?php echo esc_attr($instance['address']); ?>
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

<style>
.mk-contact-info a{
    color: #fff;
    margin: 0 0.2rem;
    font-size: 0.8rem;
}

.mk-contact-info a:hover{
    text-decoration: none;
}

.mk-contact-info a i{
    font-size: 1.5rem;
}
</style>