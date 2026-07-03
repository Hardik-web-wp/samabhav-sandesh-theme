<?php
/**
 * Blog Home Template
 * @package Samabhav_Sandesh
 */
get_header(); ?>
<div class="container blog-home">
<h1><?php single_post_title(); ?></h1>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<article <?php post_class(); ?>>
<?php if(has_post_thumbnail()) the_post_thumbnail('medium_large'); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="entry-meta"><?php echo get_the_date(); ?></div>
<?php the_excerpt(); ?>
</article>
<?php endwhile; the_posts_pagination(); endif; ?>
</div>
<?php get_footer(); ?>