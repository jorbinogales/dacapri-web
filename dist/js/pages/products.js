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


var category = 'all';

$(document).ready(function(){
	var inCategory = document.getElementById('inCategory');
	inCategory.append(category);
})

function changeCategory(categoryName){
	if(categoryName == 'all'){
		showAll();
	} else {
		hiddenAll();
		showCategory(categoryName);
	}
	nameCategory(categoryName);
}

function hiddenAll(){
	$('.category').fadeOut();
}

function showAll(){
	$('.category').fadeIn();
}

function showCategory(categoryName){
	$('.'+categoryName).fadeIn();
}

function nameCategory(categoryName){
	$('#inCategory').contents().remove();
	$('#inCategory').text(categoryName);
}