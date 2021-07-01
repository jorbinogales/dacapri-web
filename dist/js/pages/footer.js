
const API_URL = 'http://127.0.0.1:8000/api/contact/create/';

var valuations; 
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
})

$('.star').on('mouseleave', function(){
	console.log(valuations);
	for(var i = 0; i<valuations; i++){
		$('#star-'+(i+1)).addClass('star-hover');
	}
	if(valuations == null || valuations == undefined){
		for(var i = 0; i<5; i++){
			$('#star-'+(i+1)).removeClass('star-hover');
		}
	}
});

function selStar(star){
	valuations = star;
	$('#valuationsFooter').val(star);
}

$(document).ready(function() {
  var image = document.querySelector('#image_1');
  console.log(image);
  	if(image != null){
  		$('#image_1').addClass('transition-image-1');
  		$('#image_2').addClass('transition-image-2');
  		$('#image_3').addClass('transition-image-3');
	}
});

$('#formContact').submit(function(e){
	e.preventDefault();
	var formValuations = document.getElementById('valuationsFooter');
	if(formValuations.value != 0){
		var btn = document.querySelector('#registerBtn');
		btn.click();

		valuations = null;
		formValuations.value = 0;

		$.ajax({
			url: 'http://api.dacaprifactory.net/api/contact/create',
			type: 'post',
			dataType: 'json',
			data: $(this).serialize(),
			success: function(resp){
				console.log(resp);
			}
		}).fail(function(resp){
			console.log(resp);
		})

		$('#formContact').trigger("reset");
		
	} else {
		alert('Te falta valorar por estrellas');
	}
})

$(window).scroll(function(){
	if(window.scrollY >= 50){
		$('#btn-up').css({'display':'block'});
		$('#btn-up').addClass('transition-top');
	} else {
		$('#btn-up').css({'display':'none'});
		$('#btn-uo').removeClass('transition-top');
	}
});

function upScroll(){
	$('body,html').animate({scrollTop: '0px'}, 0);
}