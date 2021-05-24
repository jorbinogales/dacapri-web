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
	$price = [
				'6.00$',
				'6.00$',
				'6.00$',
				'5.00$',
				'6.00$',
				'6.00$',
				'12.00$',
				'12.00$',
				'12.00$'
				];

	$url = [
			'https://dacaprifactory.com/products/fettuccini-spinach',
			'https://dacaprifactory.com/products/fettuccini-red-beet',
			'https://dacaprifactory.com/products/fettuccini-tomato',
			'https://dacaprifactory.com/products/fettuccini-traditional',
			'https://dacaprifactory.com/products/fettuccini-veggie-festival',
			'https://dacaprifactory.com/products/fusilli-veggie-festival',
			'https://dacaprifactory.com/products/baked-pasta-la-besciamela',
			'https://dacaprifactory.com/products/baked-pasta-il-vicentino',
			'https://dacaprifactory.com/products/baked-pasta-rosso-pomodoro'
	];

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
 		'price' => $price,
 		'url' => $url,
		'category' => $category
 	];


 	return $return;
}

?>