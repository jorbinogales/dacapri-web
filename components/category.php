<?php

 function allCategory(){

	if(isset($_GET['idiom']) && $_GET['idiom'] == 'eng'){

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
    } else { 
        
        $name = [
                    'Fettuccine', 
                    'Fusilli',
                    'Horneada',
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
    }


 	return $return;
}

?>