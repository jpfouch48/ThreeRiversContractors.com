<?php
/**
 * Template part for displaying the post footer inside The Loop.
 *
 * @package TRC
 * @since   0.0.0
 */

?>

<footer class="entry-footer">

	<div class="entry-footer-right">

		<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>

	</div>

	<?php if ( 'post' === get_post_type() ) : ?>

		<?php $category_list = get_the_category_list( ', ' ); ?>

		<?php if ( $category_list && trc_has_active_categories() ) : ?>

			<span class="cat-links">

				<?php printf( 'Posted in: %s', $category_list ); // xss ok. ?>

			</span>

		<?php endif; ?>

		<?php $tag_list = get_the_tag_list( '', ', ' ); ?>

		<?php if ( $tag_list ) : ?>

			<span class="tags-links">

				<?php printf(  'Filed under: %s', $tag_list ); // xss ok. ?>

			</span>

		<?php endif; ?>

	<?php endif; ?>

</footer><!-- .entry-footer -->
