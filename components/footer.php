<?php
function footerPHP($ruta ,$page){
	?>


	<?php 
		$contextText = array(
			'contact' => array(
				'title' => 'give us your impression',
				'form' => array(
					'name' => 'name:',
					'email' => 'email:',
					'message' => 'message:',
					'submit' => 'send'
				)
			),
			'followus' => array(
				'title' => 'follow us',
				'network' => array(
					'email' => 'Email:',
					'number' => 'Local Number:',
					'whatsapp' => 'Whatsapp:',
				)
			),
			'modal' => array(
				'title' => 'Message Send',
				'text' => 'Your Message Send with Success',
				'button' => 'Close'
			),
		);

		if(isset($_GET['idiom']) && $_GET['idiom'] == 'esp'){
			$contextText = array(
				'contact' => array(
					'title' => 'danos tu impresión',
					'form' => array(
						'name' => 'nombre:',
						'email' => 'correo:',
						'message' => 'mensaje:',
						'submit' => 'enviar'
					)
				),
				'followus' => array(
					'title' => 'Síguenos',
					'network' => array(
						'email' => 'Correo Electrónico:',
						'number' => 'Número Local:',
						'whatsapp' => 'Whatsapp:',
					)
				),
				'modal' => array(
					'title' => 'Mensaje Enviado',
					'text' => 'Tu mensaje ha sido enviado con éxito',
					'button' => 'Cerrar'
				),
			);
		}
	?>

	<?php if(isset($_GET['page']) && $_GET['page'] != 'about'){ ?>
		<!-- Button trigger modal -->
		<button type="button" class="d-none btn btn-primary" data-toggle="modal" data-target="#registerModal" id="registerBtn">
		</button>
		<!-- Modal -->
		<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">
						<?php echo $contextText['modal']['title'] ?>
					</h5>
			</div>
			<div class="modal-body">
					<?php echo $contextText['modal']['text'] ?>
			</div>
			<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">
						<?php echo $contextText['modal']['button'] ?>
					</button>
			</div>
			</div>
		</div>
		</div>
		<section  class="p-4 background-white" id="contact">
			<div class="container">
				<div class="container-fluid">
					<p class="text-center"><?php echo $contextText['contact']['title']?></p>
				</div>
				<ul class="d-flex">
					<?php 
						for($i = 0; $i<5; $i++){
					?>
						<li><span class="star icon-star-1" id="star-<?php echo $i+1 ?>" onclick="selStar('<?php echo $i+1 ?>')"></span></li>
					<?php
						}
					?>
				</ul>
				<form method="post" id="formContact" onsubmit="contactSubmit(event)">
					<input type="hidden" name="valuations" value="0" id="valuationsFooter">
					<div class="form-group">
						<input type="text" 
							class="form-control" 
							id="nameForm" 
							name="name" 
							placeholder="<?php echo $contextText['contact']['form']['name'] ?>" 
							required>
					</div>
					<div class="form-group">
						<input type="email" 
							class="form-control" 
							name="email" 
							id="emailForm"
							placeholder="<?php echo $contextText['contact']['form']['email'] ?>" 
							required>
					</div>
					<div class="form-group">
						<textarea class="form-control" 
								placeholder="<?php echo $contextText['contact']['form']['message'] ?>" 
								id="textareaForm"
								name="message" 
								required></textarea>
					</div>
					<input type="submit" class="btn btnb-block w-100 background-green text-white" value="<?php echo $contextText['contact']['form']['submit'] ?>">
				</form>
			</div>
		</section>
	<?php } ?>
	
	<button class="btn background-red" id="btn-up" onclick="upScroll();"><i class="icon-up-open-mini"></i></button>
	
	<footer class="background-white">
		<div class="container">
			<div class="container-fluid">
				<h5 class="d-block text-right"><?php echo $contextText['followus']['title'] ?></h5>
				<span class="linea"></span>
				<div class="row">
					<div class="col-12 col-md-6">
						<img src="<?php echo $ruta?>dist/img/logo.png" alt="logo_dacapri" class="w-100 logo">
					</div>
					<div class="col-12 col-md-6">
						<ul class="d-flex icons">
							<li><img src="<?php echo $ruta?>dist/img/ico1.png" class="icon" alt="ico_dacapri" onclick="window.location = 'https://www.youtube.com/channel/UCo-xrlm8f8yIeXD41P9kddg'"></li>
							<li><img src="<?php echo $ruta?>dist/img/ico3.png" class="icon" alt="ico_dacapri" onclick="window.location = 'https://www.instagram.com/dacapri_/'"></li>
							<li><img src="<?php echo $ruta?>dist/img/ico4.png" class="icon" alt="ico_dacapri" onclick="window.location = 'https://www.facebook.com/DaCapri-462358184332028'"></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						<ul>
							<li>
								<p><span class="icon-phone"></span> <?php echo $contextText['followus']['network']['number']?> +1 (305) 603-7145</p>
							</li>
							<li>
								<p><span class="icon-whatsapp"></span> <?php echo $contextText['followus']['network']['whatsapp']?> +1 (305) 603-7145</p>
							</li>
							<li class="d-block d-md-none">
								<p><span class="icon-whatsapp"></span> <?php echo $contextText['followus']['network']['whatsapp']?> +1 (305) 603-7145</p>
							</li>
						</ul>
					</div>
					<div class="col-12 col-md-6">
						<ul>
							<li></li>
							<li class="d-none d-md-block">
								<p class="d-block" style="float:right;"><span class="icon-mail"></span> <?php echo $contextText['followus']['network']['email']?> info@dacaprifactory.com</p>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</footer>

	<script src="<?php echo $ruta?>dist/js/loading.js"></script>
	
	<script src="<?php echo $ruta?>dist/js/pages/footer.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

	<script src="<?php echo $ruta?>dist/js/pages/<?php echo $page?>.js"></script>

</body>
</html>

<?php
	}
?>