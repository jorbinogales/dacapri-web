<?php

 function allProducts(){

 	$name = [
				'Fettuccine Spinach', 
				'Fettuccine Red Beet',
				'Fettuccine Tomato',
				'Fettuccine Traditional',
				'Fettuccine Veggie Festival',
				'Fusilli Veggie Festival'];
	$price = [
				'7.99$',
				'7.99$',
				'7.99$',
				'7.99$',
				'7.99$',
				'7.99$',
				];

	$url = [
			'https://dacaprifactory.com/products/fettuccini-spinach',
			'https://dacaprifactory.com/products/fettuccini-red-beet',
			'https://dacaprifactory.com/products/fettuccini-tomato',
			'https://dacaprifactory.com/products/fettuccini-traditional',
			'https://dacaprifactory.com/products/fettuccini-veggie-festival',
			'https://dacaprifactory.com/products/fusilli-veggie-festival',
	];

 	$return = [
 		'name' => $name,
 		'price' => $price,
 		'url' => $url
 	];


 	return $return;
}

?>