<?php get_header(); ?>
<main class="content"><div class="page-title"><div class="wrap"><span class="eyebrow">Luma Atelier</span><h1><?php the_title(); ?></h1></div></div><div class="wrap entry-content"><?php while (have_posts()) : the_post(); the_content(); endwhile; ?></div></main>
<?php get_footer(); ?>
