<?php

 function allProducts(){

	if(isset($_GET['idiom']) && $_GET['idiom'] == 'eng'){

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

	} else { 

			$name = [
					'Fettuccine Espinaca', 
					'Fettuccine Remolacha',
					'Fettuccine Tomate',
					'Fettuccine Tradicional',
					'Fettuccine Festival de Vegetales',
					'Fusilli Festival de Vegetales',
					'Pasta horneada La Besciamela',
					'Pasta horneada Il Vicentino',
					'Pasta horneada Rosso Pomodoro'
				];

		$category = [
			'Fettuccine',
			'Fettuccine',
			'Fettuccine',
			'Fettuccine',
			'Fettuccine',
			'Fusilli',
			'Horneada',
			'Horneada',
			'Horneada'
		];

	}

	$url = 'https://shop.dacaprifactory.com';

 	$return = [
 		'name' => $name,
 		'url' => $url,
		'category' => $category
 	];


 	return $return;
}

?>