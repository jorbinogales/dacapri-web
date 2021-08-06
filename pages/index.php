<?php function indexPage($ruta){ ?>
	

	<?php 
		$contentText = array(
			"first" => array(
				'title' => 'ARTISAN, VEGAN',
				'description' => 'Italian Tradition Pasta<br>and more... ',
				'button' => 'EXPLORE OUR PRODUCTS'
			),
			"second" => array(
				'title' => '"when you try us, you won t <br>
						be able to live without us"',
			),
			"third" => array(
					'title' => 'What Makes us Diferent',
			),
			"four" => array(
					'title' => array(
						0 => 'Vegan <br>for Foodies',
						1 => 'Made <br>with Traditions',
						2 => 'Quality <br>Ingredients'
					),
					'descriptions' => array(
						0 => 'Our pasta is made with a combination of semolina 
							  which is a type of wheat flour,
						      water and vegetables, to give them color and flavor. 
						      As it doesn’t include eggs in the mixture it is 100% 
						      vegan.<br><br>
							 
							  We are really happy to be able to bring a different and delicious vegan dish
							  to your table.',
						1 => 'We are proud to say we are italians, and so,
							  we have learned to make pasta from our homes, to our parents
							  pasta factories, up until we brought them to our own pasta factories.<br><br>

							  Carrying our traditions through our hands and ingredients 
							  in order to bring you the original italian flavor, passed on
							  through generations.',
						2 => 'To make sure we bring the most nutritious and 
							  tasty products to your table, we have to be 
							  very careful with the ingredients we choose.<br><br>

							  That is why we keep it fresh and natural. The vegetables we use are the
							  key to a great pasta and you can choose between beet, carrot,
							  tomato, spinach or traditional semolina pasta.'
					)
			),
			"five" => array(
					'title' => '"Made With love
								<br>with more than 40 years
								<br><span>of history..."</span>'
			)
		);

		if(isset($_GET['idiom']) && $_GET['idiom'] == 'esp'){
			$contentText = array(
				"first" => array(
					'title' => 'ARTESANAL, VEGANA',
					'description' => 'Pasta tradicional Italiana<br>y más... ',
					'button' => 'EXPLORA NUESTROS PRODUCTOS'
				),
				"second" => array(
					'title' => '"Después que las pruebes<br>
							no podrás vivir sin ellas"',
				),
				"third" => array(
					'title' => '¿Qué nos hace diferentes',
				),
				"four" => array(
					'title' => array(
						0 => '100% <br>Vegano',
						1 => 'Hecho con <br>tradición',
						2 => 'Ingredientes de <br>Calidad'
					),
					'descriptions' => array(
						0 => 'Nuestra pasta está hecha con
								una combinación de sémola,
								que es un tipo de harina de
								trigo, agua y vegetales, para
								darles sabor y color. Como no
								lleva huevos en su mezcla es
								100% vegana.<br><br>
								Estamos muy felices de poder
								traer una propuesta vegana
								deliciosa y diferente a tu mesa.
								',
						1 => 'Estamos orgullosos de ser
								italianos, por eso, hemos
								aprendido a hacer pasta desde
								nuestros hogares, en las
								fábricas de pasta de nuestros
								padres, hasta traerla a nuestras
								propias fábricas.<br><br>
								Llevando nuestras tradiciones
								a través de nuestras manos e
								ingredientes para poder traerte
								el original sabor italiano, que ha
								pasado de generación en
								generación.',
						2 => 'Para asegurarnos de brindarte
							los productos más nutritivos y
							deliciosos posibles, tenemos
							que escoger nuestros ingredientes con mucha atención y
							cuidado.<br><br>
							Por eso utilizamos los más
							naturales y frescos. Los vegetales que utilizamos son claves
							para una pasta de calidad,
							puedes escoger entre pasta de
							remolacha, zanahoria, tomate,
							espinaca o sémola en su presentación tradicional.'
					)
				),
				"five" => array(
						'title' => '"Hecho con amor
									<br>con más de 40 años
									<br><span>de historia"</span>'
				)
			);
		}
	?>

	<link rel="stylesheet" type="text/css" href="<?php echo $ruta ?>dist/css/style/slider.css">
	<script src="<?php echo $ruta?>dist/js/slider.js"></script>
	<section id="top" class="background-red">
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<div class="d-none d-md-block col-12 col-md-6" style="position:relative;">
						<img src="<?php echo $ruta?>dist/img/platosolo3.png" id="image_3">
						<img src="<?php echo $ruta?>dist/img/platosolo2.png"  id="image_2">
						<img src="<?php echo $ruta?>dist/img/platosolo.png"  id="image_1">
					</div>
					<div class="col-12 col-md-6">
						<div class="text text-center">
							<p class="transition-top"><?php echo $contentText['first']['title'] ?></p>
							<h1 class="transition-top"><?php echo $contentText['first']['description'] ?></h1>
							<a type="button" 
							   class="transition-bottom btn background-transparent m-auto d-block mt-5" 
							   href="https://shop.dacaprifactory.com/">
								<?php echo $contentText['first']['button'] ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="slider" class="p-4 background-white">
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<!-- Slideshow container -->
						<div class="slideshow-container">

						<!-- Full-width images with number and caption text -->
							<div class="mySlides fade" id="mySlides_1">
								<img src="<?php echo $ruta ?>dist/img/product1.png">
							</div>

							<div class="mySlides fade" id="mySlides_2">
								<img src="<?php echo $ruta?>dist/img/product2.png">
							</div>

							<div class="mySlides fade" id="mySlides_3">
								<img src="<?php echo $ruta?>dist/img/product3.png">
							</div>

							<div class="mySlides fade" id="mySlides_4">
								<img src="<?php echo $ruta?>dist/img/product4.png">
							</div>

							<div class="mySlides fade" id="mySlides_5">
								<img src="<?php echo $ruta?>dist/img/product5.png">
							</div>
							
							<div class="mySlides fade" id="mySlides_6">
								<img src="<?php echo $ruta?>dist/img/product6.png">
							</div>

							<div class="mySlides fade" id="mySlides_7">
								<img src="<?php echo $ruta?>dist/img/product7.png">
							</div>

							<div class="mySlides fade" id="mySlides_8">
								<img src="<?php echo $ruta?>dist/img/product8.png">
							</div>

							<div class="mySlides fade" id="mySlides_9">
								<img src="<?php echo $ruta?>dist/img/product9.png">
							</div>


							<!-- Next and previous buttons -->
							<a class="prev" onclick="plusSlides(-1)" style="text-decoration:none;">&#10094;</a>
							<a class="next" onclick="plusSlides(1)" style="text-decoration:none;">&#10095;</a>
						</div>
						<br>
						<!-- The dots/circles -->
						<div style="text-align:center">
							<span class="dot" id="dot_1" onclick="currentSlide(1)"></span>
							<span class="dot" id="dot_2" onclick="currentSlide(2)"></span>
							<span class="dot" id="dot_3" onclick="currentSlide(3)"></span>
							<span class="dot" id="dot_4" onclick="currentSlide(4)"></span>
							<span class="dot" id="dot_5" onclick="currentSlide(5)"></span>
							<span class="dot" id="dot_6" onclick="currentSlide(6)"></span>
							<span class="dot" id="dot_7" onclick="currentSlide(7)"></span>
							<span class="dot" id="dot_8" onclick="currentSlide(8)"></span>
							<span class="dot" id="dot_9" onclick="currentSlide(9)"></span>
						</div>
						<p class="text text-center"><?php echo $contentText['second']['title'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="banner" class="p-4 background-red">
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<img src="<?php echo $ruta?>dist/img/bg-food.png" alt="">
						<p class="text-center" style="opacity:0">
							<?php echo $contentText['third']['title'] ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="info" class="p-4 background-white">
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<?php
					 $i = 0; 
					foreach($contentText['four']['title'] as $text){?>
						<div class="col-12 col-md-4 cards" id="cards_<?php echo $i ?>">
							<h4 style="opacity:0"><?php echo $contentText['four']['title'][$i] ?></h4>
							<div class="p-4">
								<p class="text-center" style="opacity:0"><?php echo $contentText['four']['descriptions'][$i] ?></p>
							</div>
						</div>
					<?php
						$i++;
					 } 
					 ?>
				</div>

				<div class="row" id="second">
					<div class="col-12">
						<img src="<?php echo $ruta?>dist/img/bg-food2.png" alt="">
						<div class="text">
							<p class="text-center" style="opacity:0">
								<?php echo $contentText['five']['title'] ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php } ?>