<?php 
	function navbarPHP($ruta, $page, $idiom){
    $indexItem = "";
    $productsItem = "";
    $aboutItem = "";
    $faqItem = "";

    switch ($page) {
      case 'index':
        $indexItem = "active";
      break;
      case 'products':
        $productsItem = "active";
      break;
      case 'about':
        $aboutItem = "active";
      break;
      case 'faq':
        $faqItem = "active";
      break;
    }

    $nav_link = '';
    $get_idiom = '';

    $navbarText = ['HOME', 'PRODUCTS','FAQS', 'ABOUT US', 'CONTACT'];

    if(isset($_GET['idiom'])){
        $nav_link = '../';
        $get_idiom = '/'.$_GET['idiom'];
        switch ($_GET['idiom']) {
          case 'esp':
            $navbarText = ['INICIO', 'PRODUCTOS', 'PREGUNTAS', 'NOSOTROS', 'CONTACTANOS'];
          break;
          default:
            $navbarText = ['HOME', 'PRODUCTS','FAQS', 'ABOUT US', 'CONTACT'];
          break;
        }
        

       
    } 

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
  <div class="container">
          <a class="navbar-brand" href="index">
              <img src="<?php echo $ruta?>dist/img/logo.png" width="100" class="d-inline-block align-top" alt="dacapri_logo">
          </a>

           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="navbar-nav mt-2 mt-lg-0">
                   <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item <?php echo $indexItem ?>">
                        <a class="nav-link" href="<?php echo $nav_link ?>index<?php echo $get_idiom?>">

                        <?php echo $navbarText[0] ?>

                      </a>
                      </li>
                      <li class="nav-item <?php echo $productsItem ?>">

                        <a class="nav-link" href="<?php echo $nav_link ?>products<?php echo $get_idiom?>">

                          <?php echo $navbarText[1] ?>
                        </a>

                      </li>
                      <li class="nav-item <?php echo $faqItem ?>">
                        <a class="nav-link" href="<?php echo $nav_link ?>faq<?php echo $get_idiom?>">
                        <?php echo $navbarText[2] ?>
                      </a>
                      </li>
                      <li class="nav-item <?php echo $aboutItem ?>">
                        <a class="nav-link" href="<?php echo $nav_link ?>about<?php echo $get_idiom?>">
                          <?php echo $navbarText[3] ?>
                        </a>
                      </li>
                    </ul>
              </div>

              <div class="navbar-nav ml-auto mt-2 mt-lg-0" style="margin-left:auto;">
                   <ul class="navbar-nav mt-2 mt-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo $nav_link ?>contact<?php echo $get_idiom?>">
                          <?php echo $navbarText[4] ?>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="dropdown">
                          <button class="btn background-white text-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if(!isset($_GET['idiom'])){ ?>
                              ENG
                            <?php } else { ?>
                              <?php echo strtoupper($_GET['idiom']); ?>
                            <?php } ?>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">


                            <?php if(!isset($_GET['idiom'])){ ?>
                              <a class="dropdown-item" href="<?php echo $page ?>/eng">ENG</a>
                              <a class="dropdown-item" href="<?php echo $page ?>/esp">ESP</a>
                            <?php } else { ?>
                              <a class="dropdown-item" href="eng">ENG</a>
                              <a class="dropdown-item" href="esp">ESP</a>
                            <?php } ?>


                          </div>
                        </div>
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