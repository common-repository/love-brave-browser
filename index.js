( function( wp ) {

	var registerBlockType = wp.blocks.registerBlockType;
	var el = wp.element.createElement;
	var __ = wp.i18n.__;

	var useBlockProps = wp.blockEditor.useBlockProps;

	registerBlockType( 'ajm/love-brave-browser', {
		apiVersion: 2,

		title: __(
			'Love, Brave Browser ♡',
			'love-brave-browser'
		),

		description: __(
			'Shoutout your love for brave browser',
			'love-brave-browser'
		),

		category: 'widgets',
		icon: 'heart',

		supports: {
			html: false,
		},

		edit: function() {
			return el(
				'p',
				useBlockProps(),
				__( '♡ Brave Browser ', 'love-brave-browser' )
			);
		},

	} );
}(
	window.wp
) );
