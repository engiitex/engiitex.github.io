$(document).ready(function() {
	$("#slideshow").css("overflow", "hidden");
	
	$("ul#slides").cycle({
		fx: "fade",
		pause: 3,
		prev: '#prev',
		next: '#next'
	});
	
	$("#slideshow").hover(function() {
		$("ul#nav").fadeIn(); /*When the slideshow div is overed with the mouse, fade in the prev & next buttons*/
	},
		function() {
		$("ul#nav").fadeOut();
	});
	
});