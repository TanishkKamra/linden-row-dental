/**
 * Demo booking form: this is a design sample, so nothing is sent anywhere.
 * The browser's own validation runs first; submit only fires on valid input.
 */
document.querySelectorAll( 'form[data-demo-form]' ).forEach( ( form ) => {
	const status = form.querySelector( '[role="status"]' );

	form.addEventListener( 'submit', ( event ) => {
		event.preventDefault();

		const fullName = String( new FormData( form ).get( 'name' ) || '' ).trim();
		const firstName = fullName.split( /\s+/ )[ 0 ];

		status.textContent =
			`Thanks${ firstName ? `, ${ firstName }` : '' }. This is a design sample, ` +
			'so nothing was sent. On a live site, reception would have this now.';
		form.reset();
	} );
} );
