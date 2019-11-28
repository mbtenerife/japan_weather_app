<?php
if(isset($_POST['avail'])){
  
$_window['from'] = $_POST['from'];
$_window['to']  = $_POST['to'];

redirect(WEB_ROOT. "index.php?page=5");
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>#TravelWithMarielle</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Japan Weather App">
<meta name="viewport" content="width=device-width, intial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="<?php echo WEB_ROOT;?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/animate.css">
<link href="<?php echo WEB_ROOT;?>plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/custom-navbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/bootstrap.css">
<link href="<?php echo WEB_ROOT; ?>styles/ekko-lightbox.css" rel="stylesheet">

</head>
<body>
 <br/>
<div class="super_container">
  <header class="header">
    <div class="header_content d-flex flex-column align-items-center justify-content-center">
      <!-- Logo -->
      <div class="logo"><a href="#"><img class="logo" src="<?php echo WEB_ROOT;?>images/logo.png" alt="" height="80px" width="80px"></a></div>

  </header>



  <div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo WEB_ROOT;?>images/home.jpg" data-speed="0.8"></div>
    <div class="home_container d-flex flex-column align-items-center justify-content-center">
      <div class="home_title"><h1><?php echo $city; ?></h1></div>
    </div>
  </div>

  <!-- Cities -->

<div class="app">
  <div class="container">
    <?php 
     check_message();
     require_once $content;  
    ?> 
 
  </div>
</div>

  <footer class="footer">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo WEB_ROOT;?>images/home.jpg" data-speed="0.8"></div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="footer_logo text-center">
            <a href="#"><img src="images/logo.png" alt="" height="100px" width="100px"></a>
          </div>
          <div class="footer_content">
            <div class="row">
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-lg-end align-items-center justify-content-start">
                  <div class="text-center">
                    <div class="home_text">Phone:</div>
                    <div class="home_text">09271271226</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-center justify-content-start">
                  <div class="home_text text-center">
                    <div class="home_text">Address:</div>
                    <div class="home_text">Manila, Philippines</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
                  <div class="home_text text-center">
                    <div class="home_text">Mail:</div>
                    <div class="home_text">tenerifemarielle@gmail.com</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </footer>
</div>

<script src="<?php echo WEB_ROOT;?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/popper.js"></script>
<script src="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/easing/easing.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="<?php echo WEB_ROOT; ?>js/ekko-lightbox.js"></script> 
<script src="<?php echo WEB_ROOT;?>js/custom.js"></script>

</body>
</html>

  <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover() 
 

<!--/.container-->
<script language="javascript" type="text/javascript">
        function OpenPopupCenter(pageURL, title, w, h) {
            var left = (screen.width - w) / 2;
            var top = (screen.height - h) / 4;  // for 25% - devide by 4  |  for 33% - devide by 3
            var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        } 
    </script>
</body>
</html>