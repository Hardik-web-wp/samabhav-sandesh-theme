<?php
/**
 * Search Results Template
 * @package Samabhav_Sandesh
 */
get_header(); ?>
<div class="container search-results">
<h1><?php printf( esc_html__( 'Search Results for: %s', 'samabhav-sandesh' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>>
<?php if ( has_post_thumbnail() ) the_post_thumbnail( 'medium' ); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
</article>
<?php endwhile; the_posts_pagination(); else : ?>
<p><?php esc_html_e( 'No results found.', 'samabhav-sandesh' ); ?></p>
<?php get_search_form(); endif; ?>
</div>
<?php get_footer(); ?>