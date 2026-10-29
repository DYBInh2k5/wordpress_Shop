<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="announcement"><?php esc_html_e('Miễn phí giao hàng cho đơn từ 799.000₫', 'luma-atelier'); ?></div>
<header class="site-header">
    <div class="wrap header-main">
        <button class="menu-toggle" aria-label="<?php esc_attr_e('Mở menu', 'luma-atelier'); ?>" aria-expanded="false">☰</button>
        <div class="header-tools"><a href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('myaccount') : wp_login_url()); ?>"><?php esc_html_e('Tài khoản', 'luma-atelier'); ?></a></div>
        <?php if (has_custom_logo()) { the_custom_logo(); } else { ?><a class="brand" href="<?php echo esc_url(home_url('/')); ?>">LUMA<small>ATELIER</small></a><?php } ?>
        <div class="header-tools"><a href="<?php echo esc_url(function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/gio-hang/')); ?>"><?php esc_html_e('Giỏ hàng', 'luma-atelier'); ?> (<?php echo esc_html(luma_atelier_cart_count()); ?>)</a></div>
    </div>
    <nav class="main-nav" aria-label="<?php esc_attr_e('Điều hướng chính', 'luma-atelier'); ?>">
        <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'fallback_cb' => false, 'items_wrap' => '<ul>%3$s</ul>')); ?>
        <?php if (!has_nav_menu('primary')) : ?><ul><li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Trang chủ', 'luma-atelier'); ?></a></li><li><a href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/cua-hang/')); ?>"><?php esc_html_e('Cửa hàng', 'luma-atelier'); ?></a></li><li><a href="<?php echo esc_url(home_url('/gioi-thieu/')); ?>"><?php esc_html_e('Về Luma', 'luma-atelier'); ?></a></li><li><a href="<?php echo esc_url(home_url('/lien-he/')); ?>"><?php esc_html_e('Liên hệ', 'luma-atelier'); ?></a></li></ul><?php endif; ?>
    </nav>
</header>
