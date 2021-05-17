<?php function indexPage($ruta){ ?>
	
	<?php  echo navbarPHP($ruta) ?>
	<section id="top" class="background-red">
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						<img src="<?php echo $ruta?>dist/img/plato.png" alt="">
					</div>
					<div class="col-6">
						<div class="text text-center">
							<p>ARTISAN, VEGAN</p>
							<span>Italian Traition Pasta<br>and more... </span>
							<button type="button" class="btn background-transparent m-auto d-block mt-5">EXPLORE OUR PRODUCTS</button>
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
						<p class="text-center">"when you try us, you won't <br>
						be able to live without us"
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
						<p class="text-center">What Make as Diferent</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="info" class="p-4 background-white">
		<div class="container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-4">
						<h4>Vegan <br>for Foodies</h4>
						<div class="p-4">
							<p> Our pasta is made with a
							combination of semolina which
							and vegetables, to give them
							include eggs in the mixture it
							is 100% vegan.<br><br>
							We are really happy to be
							delicious vegan dish to your
							table.</p>
						</div>
						
					</div>
					<div class="col-12 col-md-4">
						<h4>Make <br>with Traditions</h4>
						<div class="p-4">
							<p> We are proud to say we are
							italians, and so, we have learned
							to make pasta from our homes,
							at our parents' pasta factories,
							up until we brought them to
							our own pasta factories.<br><br>
							Carrying our traditions through
							our hands and ingredients in
							order to bring you the original
							generations</p>
						</div>
						
					</div>
					<div class="col-12 col-md-4">
						<h4>Quality <br>ingredients</h4>
						<div class="p-4">
							<p>To make sure we are bringing
							you the most nutritious and
							tasty products we have to be
							very careful with the
							ingredients we choose.<br><br>
							That is why we keep it natural
							and fresh. The vegetables we
							use are the key to a great pasta
							and you can choose between
							beet, carrot, tomato, spinach
							or traditional semolina pasta.</p>
						</div>

					</div>
				</div>

				<div class="row" id="second">
					<div class="col-12">
						<img src="<?php echo $ruta?>dist/img/bg-food2.png" alt="">
						<div class="text">
							<p class="text-center">"Made With love
								<br>with more than 40 years
								<br><span>of history..."</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section  class="p-4 background-white" id="contact">
		<div class="container">
			<div class="container-fluid">
				<p class="text-center">give us your impression</p>
			</div>
			<ul class="d-flex">
				<li><span class="icon-star-1"></span></li>
				<li><span class="icon-star-1"></span></li>
				<li><span class="icon-star-1"></span></li>
				<li><span class="icon-star-1"></span></li>
				<li><span class="icon-star-1"></span></li>
			</ul>
			<form method="post">
				<div class="form-group">
					<input type="text" class="form-control" name="" placeholder="NAME:">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="" placeholder="EMAIL:">
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="MESSAGE:"></textarea>
				</div>
			</form>
		</div>
	</section>

<?php } ?>