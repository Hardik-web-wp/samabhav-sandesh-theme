<?php
/**
 * Category Template
 * @package Samabhav_Sandesh
 */
get_header(); ?>
<div class="container category-page">
<h1><?php single_cat_title(); ?></h1>
<?php if(category_description()): ?><div class="category-description"><?php echo category_description(); ?></div><?php endif; ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<article <?php post_class(); ?>>
<?php if(has_post_thumbnail()) the_post_thumbnail('medium'); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
</article>
<?php endwhile; the_posts_pagination(); else: ?>
<p><?php esc_html_e('No posts found in this category.','samabhav-sandesh'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>