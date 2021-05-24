<?php
	function faqPage($ruta){
?>

<?php 
		$contextText = array(
			'top' => array(
				'title' => 'frequent ',
				'subtitle' => 'Questions',
				'button' => 'EXPLORER OUR PRODUCTS'
			),
			'faq' => array(
				0 => array(
					'title' => 'Where can I buy <br> Da Capri products?',
					'resp' => 'You can buy them on our online
								shop, through the “products” tab on
								our web site or going to any of our
								allies establishments. You can nd
								the list of establishments that sell
								our products here.'
				),
				1 => array(
					'title' => 'How does the online <br> shop works?',
					'resp' => 'You go to the “products” tab on the site, 
								when you have chosen your product, 
								click on the “add to cart” button. 
								Choose a payment method. 
								And after you have payed, our 
								sales department will verify and 
								process your order.'
				),
				2 => array(
					'title' => 'What are the<br> payment options?',
					'resp' => 'When you have all you want in your
								cart, you can choose to pay with
								your credit card or via wire transfer
								to our bank account.'
				),
				3 => array(
					'title' => 'How can I buy<br>
								Da Capri products if<br>
								I am not in Miami?',
					'resp' => 'You order through our online shop and we arrange shipment with 
								a delivery company that covers your location.'
				),
				4 => array(
					'title' => ' What do I do if I want to <br>
								sell Da Capri products<br>
								 in my establishment <br>
								 or become a supplier?',
					'resp' => 'To become one of our allies you can
								send an e-mail to info@dacaprifactory.com 
								with your company’s information 
								and the product or service 
								you would like to offer. Our team
								will reach you as soon as posible.'
				),
				5 => array(
					'title' => 'When should I ex pect<br>
								my order to arrive?',
					'resp' => 'If you are located in Miami dade
								county your order will arrive the
								next day. If you are outside Miami,
								time will depend on distance.'
				),
				6 => array(
					'title' => 'Why do you<br>
								use semolina?',
					'resp' => 'Semolina is a traditional Italian
								ingredient used as the base for
								pasta dough. It is a type of wheat
								flour, but it is thicker and healthier
								than common wheat flour.'
				),
				7 => array(
					'title' => 'Why are Da Capri ’s<br>
 								pasta 100% vegan?',
					'resp' => 'That’s because our pasta doesn’t
								have any type of animal products.
								Generally, pasta dough has eggs on
								the mixture. Our dough is made
								with water, semolina and fresh vegetables.'
				),
				8 => array(
					'title' => 'How natural are<br>
								the ingredients used?',
					'resp' => '100% natural, since we use semolina, 
								a less processed wheat flour,
								and fresh vegetables. No additives.'
				),
				9 => array(
					'title' => 'How is<br>
 								pasta colored?',
					'resp' => 'Pasta takes color from the vegetable 
								used for it’s preparation: Semolina (traditional),
								tomato, carrot, spinach and beet root. 
								None of our presentations 
								has any type of artificial
								coloring.'
				)
			)
		);

		if(isset($_GET['idiom']) && $_GET['idiom'] == 'esp'){
				$contextText = array(
					'top' => array(
						'title' => 'Preguntas ',
						'subtitle' => 'frecuentes',
						'button' => 'EXPLORA NUESTROS PRODUCTOS'
					),
					'faq' => array(
						0 => array(
							'title' => '¿En donde puedo adquirir <br> los productos Da 			capri?',
							'resp' => 'Los puedes adquirir en nuestra
										tienda virtual, ingresando en la
										pestaña “productos” en nuestra
										página web o acudiendo a cualquiera de nuestros puntos de ventas aliados, la lista de establecimientos la puedes conseguir aqui.'
						),
						1 => array(
							'title' => '¿Cómo comprar en la <br> tienda virtual Da Capri?',
							'resp' => 'Ingresas a la pestaña “productos”,
										cuando hayas seleccionado todos
										tus productos presionas “agregar al
										carrito”. Seleccionas el método de
										pago, realizas el pago y nuestro
										equipo de ventas vericará y
										procesara el pedido.'
						),
						2 => array(
							'title' => '¿Cuáles son los métodos de pago?',
							'resp' => 'Cuando hayas agregado todo lo que
										deseas a tu carrito, puedes realizar
										el pago a través de una transferencia 
										bancaria cargando el comprobante 
										o directamente con tu tarjeta
										de crédito.'
						),
						3 => array(
							'title' => '¿Cómo puedo comprar <br> productos Da capri <br> si estoy fuera de Miami?',
							'resp' => 'Realizas la compra a través de
										nuestra tienda virtual y nosotros
										coordinamos el envío con una empresa 
										de repartos con cobertura en
										tu localidad.'
						),
						4 => array(
							'title' => '¿Cómo hago si quiero ser<br>
				 						proveedor Da capri o<br>
										vender productos<br>
										en mi negocio?',
							'resp' => 'Para convertirte en nuestro aliado
										puedes enviarnos un correo a
										info@dacaprifactory.com con los
										datos de tu negocio y el producto/servicio
										 que requieres o ofreces,
										nuestro equipo se pondrá en contacto 
										contigo a la brevedad posible.'
						),
						5 => array(
							'title' => '¿En cuánto tiempo<br>
 										llegaría mi pedido?',
							'resp' => 'Si te encuentras en el condado de
										Miami el pedido te llegará al día siguiente.
										 Si te encuentras fuera de
										Miami el tiempo depende de la distancia.'
						),
						6 => array(
							'title' => '¿Por qué usan
										semolina?',
							'resp' => 'La semolina es el ingrediente italiano 
										tradicional utilizado como base
										de la pasta, es un tipo de harina que
										se extrae del trigo. Es más gruesa y
										saludable que la harina de trigo
										común.'
						),
						7 => array(
							'title' => '¿Por qué las pastas<br>
										Da Capri son<br>
										100% veganas?',
							'resp' => 'Esto se debe a que las pastas Da
										Capri no tienen ningún tipo de producto animal, la masa de la pasta
										generalmente lleva huevo. Los ingredientes
										de nuestra pasta son
										agua, semolina y vegetales frescos.'
						),
						8 => array(
							'title' => '¿Qué tan natural<br>
										son los ingrdientes?',
							'resp' => '100% naturales ya que utilizamos
										semolina, un tipo de harina de trigo
										poco procesada y vegetales frescos
										para la preparación sin aditivos.'
						),
						9 => array(
							'title' => '¿Cómo adquiere<br>
										color la pasta?',
							'resp' => 'Nuestras pastas tienen el color del
										vegetal que se utiliza para su preparación: Semolina (tradicional),
										tomate, zanahoria, espinaca y remolacha. 
										Ninguna de nuestras
										presentaciones posee colorante
										artificial.'
						)
					)
			);
		}
?>
<section id="top" class="p-4">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="d-none d-md-block col-12 col-md-6 position-relative">
					<img src="<?php echo $ruta?>dist/img/platosolo3.png" id="image_3" class="food">
					<img src="<?php echo $ruta?>dist/img/platosolo2.png"  id="image_2" class="food">
					<img src="<?php echo $ruta?>dist/img/platosolo.png"  id="image_1" class="food">
				</div>
				<div class="col-12 col-md-6">
					<div class="text">
						<img class="transition-top"src="<?php echo $ruta?>dist/img/logo.png" alt="logo_dacapri">
						<h2 class="transition-top"><?php echo $contextText['top']['title'] ?></h2>
						<h3 class="transition-bottom"><?php echo $contextText['top']['subtitle'] ?></h3>
						<a href="https://dacaprifactory.com/" class="btn background-white transition-bottom"><?php echo $contextText['top']['button'] ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="body" class="p-4 background-white">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<?php $i = 1; ?>
				<?php foreach($contextText['faq'] as $faq){ ?>
					<div class="col col-12 col-md-6">
						<img src="<?php echo $ruta ?>dist/img/faq<?php echo $i ?>.png" alt="faq_decapri">
						<h4><?php echo $faq['title'] ?></h4>
						<p><?php echo $faq['resp'] ?></p>
					</div>
					<?php $i++; ?>
				<?php } ?>
			</div>
		</div>
	</div>	
</section>
<?php } ?>