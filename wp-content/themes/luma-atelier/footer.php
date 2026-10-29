<footer class="site-footer">
    <div class="wrap">
        <div class="footer-grid">
            <div><h3 class="brand">LUMA</h3><p><?php esc_html_e('Thời trang nữ dành cho những ngày bình thường trở nên đặc biệt. Thiết kế tinh giản, chất liệu dễ chịu, mặc đẹp lâu dài.', 'luma-atelier'); ?></p></div>
            <div><h3><?php esc_html_e('Khám phá', 'luma-atelier'); ?></h3><ul><li><a href="<?php echo esc_url(function_exists('wc_get_page_permalink') ? wc_get_page_permalink('shop') : home_url('/cua-hang/')); ?>"><?php esc_html_e('Tất cả sản phẩm', 'luma-atelier'); ?></a></li><li><a href="<?php echo esc_url(home_url('/dieu-khoan-doi-tra/')); ?>"><?php esc_html_e('Đổi trả', 'luma-atelier'); ?></a></li></ul></div>
            <div><h3><?php esc_html_e('Hỗ trợ', 'luma-atelier'); ?></h3><ul><li><a href="<?php echo esc_url(home_url('/huong-dan-chon-size/')); ?>"><?php esc_html_e('Hướng dẫn chọn size', 'luma-atelier'); ?></a></li><li><a href="<?php echo esc_url(home_url('/lien-he/')); ?>"><?php esc_html_e('Liên hệ', 'luma-atelier'); ?></a></li></ul></div>
            <div><h3><?php esc_html_e('Theo dõi chúng tôi', 'luma-atelier'); ?></h3><p>Instagram · Facebook · TikTok</p></div>
        </div>
        <div class="footer-bottom"><span>© <?php echo esc_html(date_i18n('Y')); ?> Luma Atelier</span><span><?php esc_html_e('Thanh toán an toàn · Giao hàng toàn quốc', 'luma-atelier'); ?></span></div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
