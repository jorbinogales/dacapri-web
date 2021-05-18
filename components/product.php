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

 	$return = [
 		'name' => $name,
 		'price' => $price
 	];


 	return $return;
}

?>