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

const localidad = window.location.href;
const palabras = localidad.split('/');
const lenguage = palabras.indexOf('esp');

if (lenguage != -1) {

	var category = 'todos';

} else {

	var category = 'all';

}

console.log(category);

$(document).ready(function(){
	var inCategory = document.getElementById('inCategory');
	inCategory.append(category);
})

function changeCategory(categoryName){
	hiddenAll();
	if(categoryName == 'all' || categoryName == 'todos'){
		showAll();
	} else {
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