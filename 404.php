<?php
/**
 * 404 Template
 * @package Samabhav_Sandesh
 */
get_header(); ?>
<section class="error-404 not-found container">
    <h1><?php esc_html_e('404', 'samabhav-sandesh'); ?></h1>
    <h2><?php esc_html_e('Page Not Found', 'samabhav-sandesh'); ?></h2>
    <p><?php esc_html_e('Sorry, the page you are looking for does not exist. Try searching for another article.', 'samabhav-sandesh'); ?></p>
    <?php get_search_form(); ?>
    <p><a href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Return to Homepage', 'samabhav-sandesh'); ?></a></p>
</section>
<?php get_footer(); ?>