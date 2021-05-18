<?php
function footerPHP($ruta ,$page){
	?>
	<section  class="p-4 background-white" id="contact">
		<div class="container">
			<div class="container-fluid">
				<p class="text-center">give us your impression</p>
			</div>
			<ul class="d-flex">
				<li><span class="star icon-star-1" id="star-1"></span></li>
				<li><span class="star icon-star-1" id="star-2"></span></li>
				<li><span class="star icon-star-1" id="star-3"></span></li>
				<li><span class="star icon-star-1" id="star-4"></span></li>
				<li><span class="star icon-star-1" id="star-5"></span></li>
			</ul>
			<form method="post" id="formContact">
				<div class="form-group">
					<input type="text" class="form-control" name="name" placeholder="NAME:" required>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" placeholder="EMAIL:" required>
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="MESSAGE:" name="message" required></textarea>
				</div>
				<input type="submit" class="btn btnb-block w-100 background-green text-white" value="Enviar">
			</form>
		</div>
	</section>
	
	<footer class="background-white">
		<div class="container">
			<div class="container-fluid">
				<h5 class="d-block text-right">FOLLOW US</h5>
				<span class="linea"></span>
				<div class="row">
					<div class="col-12 col-md-6">
						<img src="<?php echo $ruta?>dist/img/logo.png" alt="logo_dacapri" class="w-100 logo">
					</div>
					<div class="col-12 col-md-6">
						<ul class="d-flex icons">
							<li><img src="<?php echo $ruta?>dist/img/ico1.png" alt="ico_dacapri"></li>
							<li><img src="<?php echo $ruta?>dist/img/ico2.png" alt="ico_dacapri"></li>
							<li><img src="<?php echo $ruta?>dist/img/ico3.png" alt="ico_dacapri" onclick="window.location = 'https://www.instagram.com/dacapri_/'"></li>
							<li><img src="<?php echo $ruta?>dist/img/ico4.png" alt="ico_dacapri" onclick="window.lcation = 'https://www.facebook.com/DaCapri-462358184332028'"></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6">
						<ul>
							<li>
								<p><span class="icon-phone"></span> Local number: +1 (305) 603-7145</p>
							</li>
							<li>
								<p><span class="icon-whatsapp"></span> Whatsapp number: +1 (954) 330-9260</p>
							</li>
						</ul>
					</div>
					<div class="col-12 col-md-6">
						<ul>
							<li></li>
							<li>
								<p class="d-block" style="float:right;"><span class="icon-mail"></span> Email: info@dacaprifactory.com</p>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</footer>
	<script src="<?php echo $ruta ?>dist/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo $ruta?>dist/js/pages/footer.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	
	<script src="<?php echo $ruta?>dist/js/pages/<?php echo $page?>.js"></script>

</body>
</html>

<?php
	}
?>