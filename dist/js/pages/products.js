$(window).scroll(function() {
	$('#prueba').val(window.scrollY);
	if (window.scrollY > 2500) {
	  $('#prueba2').val(1);
	  $('.scroll-spy').css('position', 'relative');
	  $('.scroll-spy').css('top', '0px');
	} else {
	  $('#prueba2').val(2);
	  $('.scroll-spy').css('position', 'sticky');
	  $('.scroll-spy').css('top', '2rem');
	}
});