<?php
function footerPHP($ruta){
	?>
	<footer class="background-white">
		<div class="container">
			<div class="container-fluid">
				<h5 class="d-block text-right">FOLLOW US</h5>
				<span class="linea"></span>
				<div class="row">
					<div class="col-6">
						<img src="<?php echo $ruta?>dist/img/logo.png" alt="logo_dacapri" class="w-100 logo">
					</div>
					<div class="col-6">
						<ul class="d-flex icons">
							<li><img src="<?php echo $ruta?>dist/img/ico1.png" alt="ico_dacapri"></li>
							<li><img src="<?php echo $ruta?>dist/img/ico2.png" alt="ico_dacapri"></li>
							<li><img src="<?php echo $ruta?>dist/img/ico3.png" alt="ico_dacapri"></li>
							<li><img src="<?php echo $ruta?>dist/img/ico4.png" alt="ico_dacapri"></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<ul>
							<li>
								<p><span class="icon-phone"></span> Local number: +1 (305) 603-7145</p>
							</li>
							<li>
								<p><span class="icon-whatsapp"></span> Whatsapp number: +1 (954) 330-9260</p>
							</li>
						</ul>
					</div>
					<div class="col-6">
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
	<script src="<?php echo $ruta ?>dist/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>

<?php
	}
?>