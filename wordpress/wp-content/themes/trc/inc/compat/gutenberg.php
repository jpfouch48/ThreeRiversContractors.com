<?php
/**
 * Gutenberg compatibility.
 *
 * @package    Compatibility
 * @subpackage Gutenberg
 * @category   Core
 * @author     GoDaddy
 * @since      1.8.5
 */

/**
 * Enable Gutenberg features.
 *
 * @since 1.8.5
 */
function trc_gutenberg_theme_support() {

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'trc_gutenberg_theme_support' );

/**
 * Enqueue styles for Gutenberg editor.
 *
 * @since 1.8.5
 */
function trc_gutenberg_editor_assets() {

	global $post;

	$suffix = SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'trc-gutenberg-editor', get_template_directory_uri() . "/assets/css/admin/gutenberg-editor{$suffix}.css", true, defined( 'TRC_CHILD_VERSION' ) ? TRC_CHILD_VERSION : TRC_VERSION, 'all' );

}
add_action( 'enqueue_block_editor_assets', 'trc_gutenberg_editor_assets' );
