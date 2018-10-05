<?php
/**
 * The template for displaying WooCommerce 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#404-php
 *
 * @package TRC
 * @since   0.0.0
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found">

			<header class="page-header">

				<h1 class="page-title">Oops! That page can't be found.</h1>

			</header><!-- .page-header -->

			<div class="page-content">

				<p>It looks like nothing was found at this location. Please try searching below:</p>

				<section aria-label="Search">

					<?php the_widget( 'WC_Widget_Product_Search' ); ?>

				</section>

				<section aria-label="Promoted Products">

					<?php trc_wc_promoted_products(); ?>

				</section>

				<section aria-label="Popular Products">

					<h2>Popular Products</h2>

					<?php trc_wc_best_selling_products(); ?>

				</section>

			</div><!-- .page-content -->

		</section><!-- .error-404 -->

	</main><!-- #main -->

</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_sidebar( 'tertiary' ); ?>

<?php get_footer(); ?>
