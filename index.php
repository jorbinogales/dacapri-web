<?php
	require 'components/components.php';

	echo headerPHP($ruta);
	if(!isset($_GET['page'])){
		require 'pages/index.php';
		indexPage($ruta);
	}

	echo footerPHP($ruta);
?>