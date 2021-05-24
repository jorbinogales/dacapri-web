<?php

 function allCategory(){

 	$name = [
                'Fettuccine', 
				'Fusilli',
				'Baked',
			];
    $class = [
            'background-green',
            'background-red',
            'background-black'
    ];

    $return = [
        'name' => $name,
        'class' => $class,
    ];


 	return $return;
}

?>