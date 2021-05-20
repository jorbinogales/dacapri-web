<?php
	require 'header.php';
	require 'footer.php';
	require 'navbar.php';
	$ruta = '';

	$idiom = 'eng';
	if(isset($_GET['idiom'])){
		if($_GET['idiom'] == 'esp'){
			$idiom = 'esp';
		}
		$ruta = '../';
	}
?>

