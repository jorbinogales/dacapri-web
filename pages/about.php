<?php
	function aboutPage($ruta){
		

		$contextText = array(
			'top' => array(
				'title' => 'About',
			),
			'body' => array (
				'target' => array(
					0 => 'C O N F I D E N C E',
					1 => 'Integrity',
					2 => 'P A S S I O N',
					3 => 'Competitiveness',
					4 => 'E X C E L L E N C E',
					5 => 'Transparency',
					6 => 'L O Y A L T Y',
					7 =>  'Innovation'
				),
				'text' => 	'We are known for making pasta of vegan origin,
							handmade, natural, without any additive or chemicals and with high 
							quality ingredients. Made with bronze molds and slow drying, based on 
							culinary techniques of Italian tradition, 
							being nutritious and good for the health of the whole family.',
			),
			'banner' => array(
				'title' => 'Our <br> Story',
			),
			'story' => array(
				'short' => 'Da Capri is growing from the bottom of Italo Olivo’s heart, it’s founder. <br>
							On 1895, Blas Olivo, an italian man from Bréfaro, Maratea, a city of the 
							Basilicata or Lucania region, a place of Italy where pasta consumption per 
							capita is one of the highest on the whole world, arrives in Caracas, Venezuela. 
							As every immigrant he had a lot of plans under his sleeve. After 4 years living 
							in Venezuela, Mr. Blas takes a trip back to Italy looking for his family, in 
							order to take them with him to Venezuela, the country where doors and
							opportunities were opening for them. Between the members of his family,
							one is important to our story, Andrés Blas Olivo, his son.',
				'expand' => '
							Andrés Blas was a very talkative man, he was known as the dreamer of the family. Every day he’d wake up thinking of ways to make money for his family; he was an inborn entrepreneur as we could call it today. His sons remember him with unscathed moral values, where the most important thing to him was working honestly, carrying the family name up high and having a great sense of responsibility. That’s how Andrés, his brother and brother in law decide to establish one of the biggest and steadiest pasta factory’s in the country, having more than 65 years working up until this moment with a productive capacity of more than 6000 tons of pasta a month. Over 60 years have past since that partnership between brothers, and it’s still carrying the progressive visionary dream of Blas Olivo and the moral grounds based on responsibility and comitement of it’s founders.<br><br>
							As a product of the love between Andrés Blas and Enza Brando, comes into this world Italo Olivo in Caracas Venezuela. The youngest of three sibilings, he grew up in a family filled with dreams, always reaching for prosperity and wellness. Andrés Blas and Enza Brando were hardworking entrepreneurs with a clear vision of the future they wanted, even knowing what being an immigrant implied and inspite of not knowing the spanish language.<br><br>
							In 2017, Italo follows his parents footsteps and becoms an immigrant in the United States of America, in 2018 he stablishes Da Capri, carying the scent, taste and texture of pasta in his veins. In part because in his house, pasta was eaten as a first course every day, any type of pasta with neapolitan sauce and a touch of parmesan cheese. This Company, as the one established by his predecessors, is distinguished for being a quality food producer, protecting it’s consumers and helping them grow.<br><br>
							His father, Andrés Blas, considered quality and innovation the main pillars of his Company. Italo can never forget the words of his mother, telling him about the time his father saw the place where he would later establish his factory for the first time, he saw it and said: “E qui che cresceremo a lo vedremo alla grande”<br><br>
							And it certainly was, so much that through Da Capri, Andrés Blas and Enza Brando can see from heaven how much their dreams have grown and expand.<br><br>
							This is the Story of a family that saw in Venezuela the possibility of making a dream of progress come true, they bet for a vision and made it happen. That is what Italo Olivo is following with Da Capri after 68 years, in the United States of America.<br><br>
							Da Capri is the result of a dream, an entrepreneurship, that’s in the nature of the whole family, an inherited goal.<br><br>
							',
				'button' => 'SEE MORE',
			),
			'mission' => array(
				'title' => 'Mission',
				'text' =>	'To offer nutritious and tasty, quality products. 
							Inspiring moments of happiness and optimism in every family table.',
			),
			'view' => array(
				'title' => 'Vision',
				'text' => 'To be the first brand of premium vegan food chosen by the public,
						 	distinguished for the quality, the authentic italian flavor, 
						 	operational excellence and constant innovation, hand in hand
						 	with the skills and talents of our people. Steered by a 
						  	sustainable business model, that both understands the
						  	significance of the planet and shares the risk, the
						    profitability and maximizes the return of its shareholders.',
			)
		);

		if(isset($_GET['idiom']) && $_GET['idiom'] == 'esp'){
			$contextText = array(
				'top' => array(
					'title' => 'Nosotros',
				),
				'body' => array (
					'target' => array(
						0 => 'C O N F I A N Z A',
						1 => 'Integridad',
						2 => 'P A S I Ó N',
						3 => 'Competitividad',
						4 => 'E X C E L E N C I A',
						5 => 'Transparencia',
						6 => 'L E A L T A D',
						7 =>  'Innovación'
					),
					'text' => 'Somos una empresa de productos de alimentación
								familiar de origen italiano fundada en el año 2018 y
								ubicada en el Sur de la Florida en los Estados Unidos
								de América. Nos caracterizamos por fabricar pastas de
								origen vegano, de fabricación artesanal, natural sin
								ningún adictivo o químico y con ingredientes de alta
								calidad, elaborados con moldes de bronce, secado
								lento, basadas en técnicas culinarias de tradición ita -
								liana,siendo nutritivas y buenas para la salud de toda
								la familia',
				),
				'banner' => array(
					'title' => 'Nuestra <br> Historia',
				),
				'story' => array(
					'short' => 'Da Capri está creciendo desde lo profundo del corazón de su fundador, Italo olivo. 
								Para 1895, Blas Olivo, un italiano oriundo de Bréfaro, Maratea, perteneciente a la
								Región de Basilicata o Lucania, uno de los lugares de Italia donde el consumo de 
								pasta per cápita es uno de los más grandes del mundo, llega a Caracas, Venezuela. 
								Como todos los inmigrantes con un montón de proyectos bajo el brazo. Don Blas a los 
								cuatro años de estar en Venezuela regresa a Italia para buscar a su familia y 
								traérsela al país que le estaba brindando la oportunidad, donde Andrés Blas Olivo 
								es uno de los hijos de Don Blas. Andrés Blas, era un hombre conversador, se le 
								reconoce como el soñador del grupo familiar, todos los días se levantaba pensando
								cómo hacía dinero para su familia; emprendedor innato, lo llamaríamos hoy en día.',
					'expand' => 'Andrés Blas era un hombre muy conversador, se le conocía como el soñador de la familia. Todos los días se despertaba pensando en formas de ganar dinero para su familia; era un emprendedor innato, como podríamos llamarlo hoy. Sus hijos lo recuerdan con valores morales intactos, donde lo más importante para él era trabajar con honestidad, llevar el apellido en alto y tener un gran sentido de la responsabilidad. Es así como Andrés, su cuñado y su cuñado deciden establecer una de las fábricas de pasta más grandes y sólidas del país, con más de 65 años trabajando hasta este momento con una capacidad productiva de más de 6000 toneladas de pasta al mes. Han pasado más de 60 años desde esa asociación entre hermanos, y todavía lleva el sueño visionario progresista de Blas Olivo y los fundamentos morales basados ​​en la responsabilidad y el compromiso de sus fundadores.<br><br>
								 Producto del amor entre Andrés Blas y Enza Brando, llega a este mundo Italo Olivo en Caracas Venezuela. El más joven de tres hermanos, creció en una familia llena de sueños, siempre buscando la prosperidad y el bienestar. Andrés Blas y Enza Brando eran emprendedores trabajadores con una visión clara del futuro que querían, aun sabiendo lo que implicaba ser inmigrante y a pesar de no saber el idioma español. <br> <br>
								 En 2017, Italo sigue los pasos de sus padres y se convierte en inmigrante en los Estados Unidos de América, en 2018 establece Da Capri, llevando el aroma, el sabor y la textura de la pasta en sus venas. En parte porque en su casa se comía pasta como primer plato todos los días, cualquier tipo de pasta con salsa napolitana y un toque de queso parmesano. Esta empresa, como la establecida por sus antecesores, se distingue por ser una productora de alimentos de calidad, protegiendo a sus consumidores y ayudándolos a crecer. <br> <br>
								 Su padre, Andrés Blas, consideraba la calidad y la innovación los pilares fundamentales de su empresa. Italo nunca podrá olvidar las palabras de su madre, contándole sobre la vez que su padre vio por primera vez el lugar donde luego establecería su fábrica, lo vio y dijo: “E qui che cresceremo a lo vedremo alla grande” < br> <br>
								 Y ciertamente lo fue, tanto que a través de Da Capri, Andrés Blas y Enza Brando pueden ver desde el cielo cuánto han crecido y se han expandido sus sueños. <br> <br>
								 Esta es la Historia de una familia que vio en Venezuela la posibilidad de hacer realidad un sueño de progreso, apostaron por una visión y la hicieron realidad. Eso es lo que sigue Italo Olivo con Da Capri después de 68 años, en los Estados Unidos de América. <br> <br>
								 Da Capri es el resultado de un sueño, un espíritu empresarial, que está en la naturaleza de toda la familia, un objetivo heredado. <br> <br>',
					'button' => 'VER MÁS',
				),
				'mission' => array(
					'title' => 'Misión',
					'text' =>	'Brindar productos de calidad, de
								buen sabor y nutritivos. Inspirando
								momentos de optimismo y felicidad
								a una mesa familia',
				),
				'view' => array(
					'title' => 'Visión',
					'text' => 	'Ser la primera marca de alimentos
								de origen vegano premium elegida
								por las personas en el mercado,
								reconocidas por la calidad, el
								auténtico sabor de lo italiano,
								excelencia operativa y continua
								innovación de la mano del talento
								de nuestra gente, guiada por un
								modelo de negocio sustentable, que
								conoce la importancia del planeta
								al mismo tiempo que comparte el
								riesgo, la rentabilidad y maximiza
								el retorno de sus accionistas.',
				)
			);
		}
?>
<section id="top" class="background-white p-4">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="d-none d-md-block col-0 col-md-6" style="position:relative">
					<img src="<?php echo $ruta?>dist/img/about1.png" alt="heart_capri">
				</div>
				<div class="col-12 col-md-6">
					<div class="text">
						<p><?php echo $contextText['top']['title'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="body-1" class="p-4">
	<div class="container">
		<div class="container-fluid">
			<div class="row info">
				<div class="col-12 col-md-6">
					<div class="target">
						<p> 
							<?php 
							$i = 0;
							foreach($contextText['body']['target'] as $target){
								?>
								<span id="target_<?php echo $i ?>" class="textTarget"><?php echo $target ?></span><br>
								<?php
								$i++;
							}
							?>
						</p>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<p class="text-r"><?php echo $contextText['body']['text'] ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="body-2" class="p-4 background-green">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<p><?php echo $contextText['banner']['title'] ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="story" class="p-4 background-white">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<p class="text">
						<?php echo $contextText['story']['short'] ?>
					</p>
					<p class="text" id="story-expand" style="display:none">
						<?php echo $contextText['story']['expand'] ?>
					</p>
					<button id="btn-more" type="button" class="btn text-dark d-block m-auto background-white" onclick="SeeMore('<?php echo $contextText['story']['button'] ?>')">
						<?php echo $contextText['story']['button'] ?>...
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<ul class="d-flex">
						<li>
							<img src="<?php echo $ruta?>dist/img/about8.png" alt="">
							<p>Cristo de san blas, Maratea, 1895.</p>
						</li>
						<li>
							<img src="<?php echo $ruta?>dist/img/about7.png" alt="">
							<p>Valle de Caracas, Venezuela, 1953.</p>
						</li>
						<li>
							<img src="<?php echo $ruta?>dist/img/about6.png" alt="">
							<p>Miami, Estados Unidos, 2017</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="about" class="p-4 background-red">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="iframe-container">
								<div id="player"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="mision" class="p-4 background-white">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-6">
					<img src="<?php echo $ruta?>dist/img/about11.png" alt="dacapri">
				</div>
				<div class="col-12 col-md-6">
					<br class="d-none d-md-block">
					<br class="d-none d-md-block">
					<br class="d-none d-md-block">
					<h2><?php echo $contextText['mission']['title'] ?></h2>
					<p><?php echo $contextText['mission']['text'] ?></p>
				</div>
			</div>
			<div class="row">
				<div class="d-block d-md-none col-12 col-md-0">
					<img src="<?php echo $ruta?>dist/img/about12.png" alt="dacapri">
				</div>
				<div class="col-12 col-md-6">
					<h2><?php echo $contextText['view']['title'] ?></h2>
					<p><?php echo $contextText['view']['text'] ?></p>
				</div>
				<div class="d-none d-md-block col-md-6">
					<img src="<?php echo $ruta?>dist/img/about12.png" alt="dacapri">
				</div>
			</div>
		</div>
	</div>
</section>

<?php } ?>