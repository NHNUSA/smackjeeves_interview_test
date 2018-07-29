var Utils = (function() {
	
	var Utils = {
		imageSrcFromInputFile: function( inputFile ) {
			
			var _URL = window.URL || window.webkitURL;
			
			return _URL.createObjectURL( inputFile );
			
		}
	};
	
	return Utils;
	
})();