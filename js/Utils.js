var Utils = (function() {
	
	var Utils = {
		imageFromInputFile: function( inputFile ) {
			
			var image = new Image(),
				_URL = window.URL || window.webkitURL;
			
			image.src = _URL.createObjectURL( inputFile );
			
			return image;
			
		}
	};
	
	return Utils;
	
})();