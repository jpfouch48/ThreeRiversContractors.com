<?php
/**
 * The template used for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 *
 * @package TRC
 * @since   0.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! trc_use_featured_hero_image() ) : ?>

		<?php get_template_part( 'templates/parts/loop/post', 'thumbnail' ); ?>

	<?php endif; ?>

	<?php get_template_part( 'templates/parts/loop/page', 'content' ); ?>

	<?php get_template_part( 'templates/parts/loop/page', 'footer' ); ?>

</article><!-- #post-## -->
