/* global jQuery */
window.wp = window.wp || {};

( function( $ ) {

	$( document ).ready( function() {

		$( 'input[name="trc-layout-override"]' ).change( function() {

			if ( '1' === $( this ).val() ) {

				$( '.trc-layout ul li' )
					.removeClass( 'disabled' )
					.addClass( 'active' )
					.find( 'input' )
					.prop( 'disabled', false );

				return;

			}

			$( '.trc-layout ul li' )
				.addClass('disabled')
				.find(':not(.global)')
				.removeClass( 'active' )
				.addClass( 'disabled' )
				.find( 'input' )
				.prop( 'disabled', true );

			$( '.trc-layout ul li.global input' )
				.prop( 'checked', true )
				.trigger( 'change' );

		} );

		$( 'input[name="trc-layout"]' ).change( function() {
			toggleEditorWidth( $( this ).val() );
		} );

	} );

	$( document ).on( 'ready', function() {
		toggleEditorWidth( trcLayouts.selected );
	} );

} )( jQuery );

function toggleEditorWidth( pageWidth ) {

	pageWidth = pageWidth.indexOf( 'wide' ) >= 0 ? 'wide' : ( pageWidth.indexOf( 'narrow' ) >= 0 || pageWidth.indexOf( 'three-column' ) >= 0 ? 'narrow' : 'default' );

	$( 'body.gutenberg-editor-page' )
		.removeClass( 'trc-gutenberg-default trc-gutenberg-wide trc-gutenberg-narrow' )
		.addClass( 'trc-gutenberg-' + pageWidth );

}
