<?php 
	function headerPHP($ruta , $page){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Da Capri</title>
	<link rel="stylesheet" href="<?php echo $ruta ?>dist/css/bootstrap/bootstrap.min.css">
	<!-- ESTILOS DE ICONOS  -->
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>dist/css/font/styles.css">
	<!-- ESTILOS DEL FOOTER  -->
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>dist/css/style/footer.css">
	<!-- ESTILOS DEL FOOTER  -->
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>dist/css/style/<?php echo $page?>.css">
	<!-- LOADING  -->
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>dist/css/style/loading.css">
	<script src="<?php echo $ruta ?>dist/js/jquery-3.3.1.min.js"></script>
</head>
<body>

	<!-- Loading HTML -->
	<div class="loading show">
	    <div class="spin"></div>
	</div>
<?php } ?>