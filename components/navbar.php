<?php 
	function navbarPHP($ruta){
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
  <div class="container">
          <a class="navbar-brand" href="#">
              <img src="<?php echo $ruta?>dist/img/logo.png" width="100" class="d-inline-block align-top" alt="dacapri_logo">
          </a>

           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav mt-2 mt-lg-0">
                   <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                        <a class="nav-link" href="index">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="products">PRODUCTS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="faqs">FAQS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about">ABOUT US</a>
                      </li>
                    </ul>
              </div>

              <div class="navbar-nav ml-auto mt-2 mt-lg-0" style="margin-left:auto;">
                   <ul class="navbar-nav mt-2 mt-lg-0">
                      <li class="nav-item active">
                        <a class="nav-link" href="contact">CONTACT US</a>
                      </li>
                      <li class="nav-item">
                        <button class="btn background-white text-dark">ENG</button>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><span class="icon-shopping-cart"></span></a>
                      </li>
                    </ul>
              </div>
          </div>
    </div>
</nav>
<?php
	}
?>