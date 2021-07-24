
const API_URL = 'https://api.dacaprifactory.net/public/api/';

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

const contactSubmit = (e) => {

	e.preventDefault();

	let form = document.querySelector('#'+e.target.id);
	formData = new FormData(form);

	var formValuations = document.getElementById('valuationsFooter');
	
	if(formValuations.value != 0){

		var btn = document.querySelector('#registerBtn');
		btn.click();
		valuations = null;
		formValuations.value = 0;

		axios.post(API_URL + 'contact/create', formData)
        .then(response =>{
			console.log(response);
        })
        .catch( error => {
            console.log(error);  
        });

		$('#formContact').trigger("reset");
		
	} else {
		alert('Te falta valorar por estrellas');
	}
}
