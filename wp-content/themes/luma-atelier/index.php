<?php get_header(); ?>
<main class="content wrap"><div class="page-title"><div class="wrap"><span class="eyebrow"><?php esc_html_e('Luma Atelier', 'luma-atelier'); ?></span><h1><?php echo esc_html(is_home() ? __('Tin mới', 'luma-atelier') : get_the_title()); ?></h1></div></div><div class="entry-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?><article <?php post_class(); ?>><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php the_excerpt(); ?></article><?php endwhile; the_posts_pagination(); else : ?><p><?php esc_html_e('Chưa có nội dung.', 'luma-atelier'); ?></p><?php endif; ?>
</div></main>
<?php get_footer(); ?>
