<?php
	function productsPage($ruta){
		require 'components/product.php';
		$products = allProducts();
		$productsName = $products['name'];
		$productsPrice = $products['price'];
?>

<!-- ESTILOS DE PRODUCTS.PHP  -->


<section id="top" class="p-4 background-white">
	<div class="container">
		<div class="container-fluid">
			<h2>Products</h2>
			<img src="<?php echo $ruta?>dist/img/cart.png" alt="">
		</div>
	</div>
</section>

<section id="body" class="p-4 background-white">
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="card h-100">
						<div class="card-body h-100">
							
						</div>
					</div>
				</div>
				<div class="col-12 col-md-8">
					<div class="row">
						<?php 
							for($i = 0; $i < count($productsName) ; $i++){
						?>
							<div class="col-6">
								<div class="card card-border">
									<div class="card-body">
										<img src="<?php echo $ruta?>dist/img/product<?php echo $i+1 ?>.png" class="w-100">
										<p><?php echo $productsName[$i] ?></p>
										<span><?php echo $productsPrice[$i]?></span>
										<div class="row card_footer p-0">
											<div class="col-6">
												<button type="button" class="text-dark btn btn-card-right
												background-white btn-block w-100">
													<span class="icon-dot-3"></span>
												</button>
											</div>
											<div class="col-6">
												<button type="button" class="text-dark btn btn-cart-left background-white btn-block w-100">
													<span class="icon-shopping-cart"></span>
												</button>
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