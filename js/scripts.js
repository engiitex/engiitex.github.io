$(document).ready(function() {
	$("#slideshow").css("overflow", "hidden");
	
	$("ul#slides").cycle({
		fx: "scrollLeft",
		pause: 5,
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