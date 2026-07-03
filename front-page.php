<?php
/**
 * Front Page Template
 * @package Samabhav_Sandesh
 */
get_header(); ?>
<section class="hero-news">
<div class="container">
<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
<?php
$featured = new WP_Query(array('posts_per_page'=>5));
if($featured->have_posts()):
 echo '<div class="news-grid">';
 while($featured->have_posts()): $featured->the_post(); ?>
<article <?php post_class(); ?>>
<?php if(has_post_thumbnail()) the_post_thumbnail('large'); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
</article>
<?php endwhile; echo '</div>'; wp_reset_postdata(); endif; ?>
</div>
</section>
<?php get_footer();