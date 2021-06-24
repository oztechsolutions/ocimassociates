<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codebook
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post__content">
		<?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
	</div><!-- .post__content -->
</article><!-- #post -->
