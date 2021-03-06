<?php
	function productsPage($ruta){
		require 'components/product.php';
		require 'components/category.php';

		$products = allProducts();
		$category = allCategory();


		$productsName = $products['name'];
		$productsUrl = $products['url'];
		$productsCategory = $products['category'];

		$categoryName = $category['name'];
		$categoryClass = $category['class'];
?>

<?php 
		$contextText = array(
			'top' => array(
				'title' => 'Products',
			),
			'products' => array(
				'category' => 'All',
				'button' => 'Buy'
			)
		);

		if(isset($_GET['idiom']) && $_GET['idiom'] == 'esp'){
			$contextText = array(
				'top' => array(
					'title' => 'Productos',
				),
				'products' => array(
					'category' => 'Todos',
					'button' => 'Comprar'
				)
			);
		}
	?>


<section id="top">
	<div class="container">
		<div class="container-fluid">
			<h2><?php echo $contextText['top']['title'] ?></h2>
			<img src="<?php echo $ruta?>dist/img/cart.png" alt="">
		</div>
	</div>
</section>

<section id="body" class="p-4 background-white">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-4 p-4">
					<div class="h-100 list-btn">
						<ul class="d-block scroll-spy p-0" style="z-index: 1000;">
							<li>
								<button type="button" 
										class="btn background-white text-dark"
										onclick="changeCategory('all')">
										<?php echo $contextText['products']['category'] ?>
								</button>
							</li>
							<?php
								for($i = 0; $i<count($categoryName); $i++){
									?>
									<li>
										<button type="button" 
												class="btn <?php echo $categoryClass[$i] ?>" 
												onclick="changeCategory('<?php echo $categoryName[$i]?>')">
											<?php echo $categoryName[$i] ?>
										</button>
									</li>
									<?php
								}
							?>
						</ul>
						<div class="card h-100 list-bg">
							<div class="card-body h-100"></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-8">
					<h3 id="inCategory"></h3>
					<div class="row">
						<?php 
							for($i = 0; $i < count($productsName) ; $i++){
						?>
							<div class="col-6 category <?php echo $productsCategory[$i] ?>">
								<div class="card card-border card-item" onclick="window.location = '<?php echo $productsUrl ?>'">
									<div class="card-body">
										<img src="<?php echo $ruta?>dist/img/product<?php echo $i+1 ?>.png" class="w-100">
										<p><?php echo $productsName[$i] ?></p>
										<div class="row card_footer p-0">
											<div class="col-12">
												<a type="button" class="text-dark btn btn-card
												background-white btn-block w-100">
													<?php echo $contextText['products']['button'] ?>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php } ?>