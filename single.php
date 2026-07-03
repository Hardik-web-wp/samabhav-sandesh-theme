<?php
/**
 * Single Post Template
 * @package Samabhav_Sandesh
 */
get_header();
if(have_posts()): while(have_posts()): the_post(); ?>
<article <?php post_class('single-article'); ?>>
<h1><?php the_title(); ?></h1>
<div class="entry-meta">
<span><?php echo get_the_date(); ?></span> |
<span><?php the_author(); ?></span>
</div>
<?php if(has_post_thumbnail()) the_post_thumbnail('large'); ?>
<div class="entry-content">
<?php the_content(); ?>
</div>
<?php the_post_navigation(); ?>
</article>
<?php endwhile; endif;
get_footer();