<?php
/**
 * Template part for displaying the post footer on search results inside The Loop.
 *
 * @package trc
 * @since   1.0.0
 */

?>

<footer class="entry-footer">

	<?php if ( 'post' === get_post_type() ) : ?>

		<?php $category_list = get_the_category_list( /* translators: separator for items in a list */ esc_html__( ', ', 'trc' ) ); ?>

		<?php if ( $category_list && trc_has_active_categories() ) : ?>

			<span class="cat-links">

				<?php printf( /* translators: category list */ esc_html__( 'Posted in: %s', 'trc' ), $category_list ); // xss ok. ?>

			</span>

		<?php endif; ?>

		<?php $tag_list = get_the_tag_list( '', /* translators: separator for items in a list */ esc_html__( ', ', 'trc' ) ); ?>

		<?php if ( $tag_list ) : ?>

			<span class="tags-links">

				<?php printf( /* translators: tag list */ esc_html__( 'Filed under: %s', 'trc' ), $tag_list ); // xss ok. ?>

			</span>

		<?php endif; ?>

	<?php endif; ?>

	<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>

		<span class="comments-link"><?php comments_popup_link( esc_html__( 'Leave a comment', 'trc' ), esc_html__( '1 Comment', 'trc' ), /* translators: number of comments */ esc_html__( '%d Comments', 'trc' ) ); ?></span>

	<?php endif; ?>

	<?php edit_post_link( esc_html__( 'Edit', 'trc' ), '<span class="edit-link">', '</span>' ); ?>

</footer><!-- .entry-footer -->
