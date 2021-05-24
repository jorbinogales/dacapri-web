

var banner, slider, second, cards
$(document).ready(function(){
	banner = document.querySelector('#banner').offsetTop;
	slider = document.querySelector('#slider').offsetTop;
	second = document.querySelector('#second').offsetTop;

	cards = [];
	num_cards = document.getElementsByClassName('cards');
	for(var i = 0; i<num_cards.length; i++){
		cards[i] = document.querySelector('#cards_'+i).offsetTop;
	}
})
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


$(window).scroll(function() {

	if(window.scrollY+500 >= banner){
		$('#banner p').addClass('transition-zoom');
	}
	if(window.scrollY+500 >= slider){
		$('#slider p').addClass('transition-zoom');
	}
	if(window.scrollY+500 >= second){
		$('#second p').addClass('transition-zoom');
	}
	if(cards.length > 0){
		for(var i = 0; i< cards.length; i++){
			if(window.scrollY+500 >= cards[i]){
				console.log(cards[i]);
				$('#cards_'+i+' h4').addClass('transition-right');
				$('#cards_'+i+' p').addClass('transition-right');
			}
		}
	}
});