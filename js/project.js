var PROJECT = (function(PROJECT, $, window){
	var section,
	step;
	
	var init = function(){
		var mapping = {
			
		};
	
		$(document).ready(function(){
			section = $('body').data('section');
			step = $('body').data('step');
			
			mapping[section]();
			
		});
	}();

	return PROJECT;
	
})(PROJECT || {}, jQuery, window, undefined);