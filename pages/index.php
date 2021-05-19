<?php function indexPage($ruta){ ?>
	

	<?php 
		$contentText = array(
			"first" => array(
				'title' => 'ARTISAN, VEGAN',
				'description' => 'Italian Traition Pasta<br>and more... ',
				'button' => 'EXPLORE OUR PRODUCTS'
			),
			"second" => array(
				'title' => '"when you try us, you won t <br>
						be able to live without us"',
			),
			"third" => array(
					'title' => 'What Make as Diferent',
			),
			"four" => array(
					'title' => array(
						0 => 'Vegan <br>for Foodies',
						1 => 'Make <br>with Traditions',
						2 => 'Quality <br>ingredients'
					),
					'descriptions' => array(
						0 => 'Our pasta is made with a
							combination of semolina which
							and vegetables, to give them
							include eggs in the mixture it
							is 100% vegan.<br><br>
							We are really happy to be
							delicious vegan dish to your
							table.',
						1 => 'We are proud to say we are
							italians, and so, we have learned
							to make pasta from our homes,
							at our parents pasta factories,
							up until we brought them to
							our own pasta factories.<br><br>
							Carrying our traditions through
							our hands and ingredients in
							order to bring you the original
							generations',
						2 => 'To make sure we are bringing
							you the most nutritious and
							tasty products we have to be
							very careful with the
							ingredients we choose.<br><br>
							That is why we keep it natural
							and fresh. The vegetables we
							use are the key to a great pasta
							and you can choose between
							beet, carrot, tomato, spinach
							or traditional semolina pasta.'
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
					'description' => 'Pasta tradicional Vegana<br>y más... ',
					'button' => 'EXPLORA NUESTROS PRODUCTOS'
				),
				"second" => array(
					'title' => '"Cuando nos pruebes, no podras<br>
							vivir sin nosotros"',
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


	<section id="top" class="background-red">
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<div class="d-none d-md-block col-12 col-md-6">
						<img src="<?php echo $ruta?>dist/img/plato.png" alt="">
					</div>
					<div class="col-12 col-md-6">
						<div class="text text-center">
							<p><?php echo $contentText['first']['title'] ?></p>
							<span><?php echo $contentText['first']['description'] ?></span>
							<a type="button" class="btn background-transparent m-auto d-block mt-5" href="products">
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
						<img src="<?php echo $ruta?>dist/img/food.png" alt="food_dacapri">
						<p class="text-center">
							<?php echo $contentText['second']['title'] ?>
						</p>
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
						<p class="text-center">
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
						<div class="col-12 col-md-4">
							<h4><?php echo $contentText['four']['title'][$i] ?></h4>
							<div class="p-4">
								<p><?php echo $contentText['four']['descriptions'][$i] ?></p>
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
							<p class="text-center">
								<?php echo $contentText['five']['title'] ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php } ?>