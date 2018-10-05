<?php
/**
 * The template part for displaying general content.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 *
 * @package trc
 * @since   1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

	/**
	 * Fires inside the `article` element, before the content.
	 *
	 * @hooked trc_wc_shop_messages - 10
	 *
	 * @since 1.0.0
	 */
	do_action( 'trc_before_post_content' );

	?>

	<?php if ( ! is_single() || ! trc_use_featured_hero_image() ) : ?>

		<?php get_template_part( 'templates/parts/loop/post', 'thumbnail' ); ?>

	<?php endif; ?>

	<?php get_template_part( 'templates/parts/loop/post', 'title' ); ?>

	<?php

	/**
	 * Fires after templates/parts/loop/post template
	 *
	 * @hooked trc_add_post_meta - 10
	 *
	 * @since 1.0.0
	 */
	do_action( 'trc_after_post_title_template' );

	?>

	<?php if ( is_single() ) : ?>

		<?php get_template_part( 'templates/parts/loop/post', 'content' ); ?>

	<?php else : ?>

		<?php get_template_part( 'templates/parts/loop/post', 'excerpt' ); ?>

	<?php endif; ?>

	<?php get_template_part( 'templates/parts/loop/post', 'footer' ); ?>

	<?php

	/**
	 * Fires inside the `article` element, after the content.
	 *
	 * @since 1.0.0
	 */
	do_action( 'trc_after_post_content' );

	?>

</article><!-- #post-## -->
