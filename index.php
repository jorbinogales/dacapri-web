<?php
	require 'components/components.php';

	echo headerPHP($ruta);
	echo navbarPHP($ruta);
	if(!isset($_GET['page'])){
		require 'pages/index.php';
		indexPage($ruta);
	} else {
		switch ($_GET['page']) {

			case 'products':
				require 'pages/products.php';
				productsPage($ruta);
			break;

			case 'about':
				require 'pages/about.php';
				aboutPage($ruta);
			break;
			case 'faqs':
				require 'pages/faq.php';
				faqPage($ruta);
			break;
			case 'contact':
				require 'pages/contact.php';
				contactPage($ruta);
			break;
			default:
				require 'pages/index.php';
				indexPage($ruta);
			break;
		}
	}

	echo footerPHP($ruta);
?>