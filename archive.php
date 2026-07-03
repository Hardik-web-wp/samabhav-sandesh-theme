<?php
/**
 * Archive Template
 * @package Samabhav_Sandesh
 */
get_header(); ?>
<div class="container archive-page">
<h1><?php the_archive_title(); ?></h1>
<div class="archive-description"><?php the_archive_description(); ?></div>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<article <?php post_class(); ?>>
<?php if(has_post_thumbnail()) the_post_thumbnail('medium'); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
</article>
<?php endwhile; the_posts_pagination(); else: ?>
<p><?php esc_html_e('No posts found.','samabhav-sandesh'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>