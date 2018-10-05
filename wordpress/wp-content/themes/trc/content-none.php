<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 *
 * @package TRC
 * @since   0.0.0
 */

?>

<section class="no-results not-found">

	<header class="page-header">

		<h1 class="page-title">Nothing Found</h1>

	</header><!-- .page-header -->

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
			<?php

			printf(
				'Ready to publish your first post? %s.',
				sprintf(
					'<a href="%s">%s</a>',
					admin_url( 'post-new.php' ),
					'Get started here'
				)
			);

			?>
			</p>

		<?php elseif ( is_search() ) : ?>

			<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>

			<?php get_search_form(); ?>

		<?php else : ?>

			<p>It seems we can't find what you're looking for. Perhaps searching can help.</p>

			<?php get_search_form(); ?>

		<?php endif; ?>

	</div><!-- .page-content -->

</section><!-- .no-results -->
