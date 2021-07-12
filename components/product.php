<?php

 function allProducts(){

 	$name = [
				'Fettuccine Spinach', 
				'Fettuccine Red Beet',
				'Fettuccine Tomato',
				'Fettuccine Traditional',
				'Fettuccine Veggie Festival',
				'Fusilli Veggie Festival',
				'Baked Pasta La Besciamela',
				'Baked Pasta Il Vicentino',
				'Baked Pasta Rosso Pomodoro'
			];

	$url = 'https://dacaprifactory.com';

	$category = [
		'Fettuccine',
		'Fettuccine',
		'Fettuccine',
		'Fettuccine',
		'Fettuccine',
		'Fusilli',
		'Baked',
		'Baked',
		'Baked'
	];

 	$return = [
 		'name' => $name,
 		'url' => $url,
		'category' => $category
 	];


 	return $return;
}

?>