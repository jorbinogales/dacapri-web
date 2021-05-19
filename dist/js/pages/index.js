$(document).ready(function() {
  $('#image_1').addClass('transition-image-1');
  $('#image_2').addClass('transition-image-2');
  $('#image_3').addClass('transition-image-3');
});

$('.star').on('mouseenter', function(event){
	var star = event.target.id;
	var id = star.split("-");
	var numstart = id[1];
	for(var i = 1; i<=5; i++){
		$('#star-'+i).removeClass('star-hover');
	}
	for(var i = 1; i<=numstart; i++){
		$('#star-'+i).addClass('star-hover');
		console.log($('#star-'+i));
	}
});

