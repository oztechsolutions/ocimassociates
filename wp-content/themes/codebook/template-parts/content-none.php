<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codebook
 */

?>
<article id="post-0" class="post no-results not-found">
	<div class="post__content">
		<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'codebook' ); ?></p>
		<?php get_search_form(); ?>
	</div><!-- .post__content -->
</article><!-- #post-0 -->

