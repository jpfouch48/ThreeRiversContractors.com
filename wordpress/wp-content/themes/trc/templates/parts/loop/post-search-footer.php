<?php
/**
 * Template part for displaying the post footer on search results inside The Loop.
 *
 * @package TRC
 * @since   0.0.0
 */

?>

<footer class="entry-footer">

	<?php if ( 'post' === get_post_type() ) : ?>

		<?php $category_list = get_the_category_list( ', ' ); ?>

		<?php if ( $category_list && trc_has_active_categories() ) : ?>

			<span class="cat-links">

				<?php printf( 'Posted in: %s' ), $category_list ); // xss ok. ?>

			</span>

		<?php endif; ?>

		<?php $tag_list = get_the_tag_list( '',  ', ' ); ?>

		<?php if ( $tag_list ) : ?>

			<span class="tags-links">

				<?php printf( 'Filed under: %s', $tag_list ); // xss ok. ?>

			</span>

		<?php endif; ?>

	<?php endif; ?>

	<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>

		<span class="comments-link"><?php comments_popup_link( 'Leave a comment',  '1 Comment', '%d Comments' ); ?></span>

	<?php endif; ?>

	<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>

</footer><!-- .entry-footer -->
