
var inputs = document.querySelectorAll( '.inputfile' );
Array.prototype.forEach.call( inputs, function( input )
{
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		fileName = this.files[0].name;

		if( fileName )
			label.querySelector( 'span' ).innerHTML = fileName;
	});
});
