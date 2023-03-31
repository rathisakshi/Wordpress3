( function( api ) {

	// Extends our custom "luxury-interior" section.
	api.sectionConstructor['luxury-interior'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );