<?php get_header(); ?>
<main class="content"><div class="wrap entry-content"><?php while (have_posts()) : the_post(); ?><article <?php post_class(); ?>><span class="eyebrow"><?php echo esc_html(get_the_date()); ?></span><h1 class="page-title"><?php the_title(); ?></h1><?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } ?><div><?php the_content(); ?></div></article><?php endwhile; ?></div></main>
<?php get_footer(); ?>
