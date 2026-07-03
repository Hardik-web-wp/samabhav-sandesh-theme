<?php
/**
 * Main template file
 * @package Samabhav_Sandesh
 */

get_header();
?>
<div class="container">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php if ( has_post_thumbnail() ) the_post_thumbnail('large'); ?>
            <?php the_excerpt(); ?>
        </article>
    <?php endwhile; ?>

    <?php the_posts_pagination(); ?>
<?php else : ?>
    <p><?php esc_html_e('No posts found.', 'samabhav-sandesh'); ?></p>
<?php endif; ?>
</div>
<?php
get_footer();
