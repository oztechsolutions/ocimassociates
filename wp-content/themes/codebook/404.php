<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package codebook
 */
get_header(); ?>

    <section id="content" class="site__content" role="main">
        <div class="container">
            <article id="post-0" class="post error404 pt-5 pb-5 no-results not-found text-center">
                <div class="errorIcon pt-5 pb-5"> <i class="fal fa-exclamation-triangle"></i> </div>
                <h2>404 Error</h2>
                <p>Unfortunately the page you are looking for does not seem to be here, we do apologise.</p>
                <a href="<?php echo site_url(); ?>" class="custom-button mt-4">Go to Home page</a>
            </article><!-- #post-0 -->
        </div>
    </section><!-- #content -->
    <style>
        .errorIcon i { color: #c00; font-size: 10rem; }
    </style>

<?php get_footer(); ?>
