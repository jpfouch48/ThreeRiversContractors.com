<?php
/**
 * The template for displaying WooCommerce 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#404-php
 *
 * @package TRC
 * @since   1.0.0
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found">

			<header class="page-header">

				<h1 class="page-title"><?php esc_html_e( "Oops! That page can't be found.", 'trc' ); ?></h1>

			</header><!-- .page-header -->

			<div class="page-content">

				<p><?php esc_html_e( 'It looks like nothing was found at this location. Please try searching below:', 'trc' ); ?></p>

				<section aria-label="<?php esc_html__( 'Search', 'trc' ); ?>">

					<?php the_widget( 'WC_Widget_Product_Search' ); ?>

				</section>

				<section aria-label="<?php esc_html__( 'Promoted Products', 'trc' ); ?>">

					<?php trc_wc_promoted_products(); ?>

				</section>

				<section aria-label="<?php esc_html__( 'Popular Products', 'trc' ); ?>">

					<h2><?php esc_html_e( 'Popular Products', 'trc' ); ?></h2>

					<?php trc_wc_best_selling_products(); ?>

				</section>

			</div><!-- .page-content -->

		</section><!-- .error-404 -->

	</main><!-- #main -->

</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_sidebar( 'tertiary' ); ?>

<?php get_footer(); ?>
