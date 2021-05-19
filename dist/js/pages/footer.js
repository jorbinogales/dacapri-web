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

$('#formContact').submit(function(e){
	e.preventDefault();
	$.ajax({
		url: 'http://api.dacaprifactory.net/api/contact/create',
		type: 'post',
		dataType: 'json',
		data: $(this).serialize(),
		success: function(resp){
			var btn = document.querySelector('#registerBtn');
			btn.click();
		}
	}).fail(function(resp){
		
	})
})