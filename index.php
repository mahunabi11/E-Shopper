<?php
include_once "apps/db.php";
  
 $sql = "SELECT * FROM shop";
 $data = $connection ->query($sql);

?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Mini ecommerce</title>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>


<!--Menu start-->
<nav class="navbar navbar-expand-md fixed-top  navbar-dark  head_menu">
        <div class="container">
            <div class="logo"> <img src="img/logo.png" alt=""></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav">
            <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse" id="mynav" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#banner">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#shopping">Shopping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-part">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_part">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--Menu end-->


 


 
<!--Banner start-->
  <section id="banner">
      <div class="row">
          <div class="col">
              <div class="banner">
                  <div class="banner-content">
                      <h2 data-wow-duration="2s" class="wow bounceInRight center">WELCOME TO</h2>
                      <h3 data-wow-delay=".4s" data-wow-duration="4s" class="wow bounceInLeft center"><span>E</span>-SHOPPER</h3>
                  </div>
              </div>
          </div>
      </div>
  </section>
<!--Banner end-->

 


<!--Shopping starts-->

    <section>
        <div class="container">
            <div class="container text-center" id="shopping">
                <div class="row justify-content-center">
                    <div class="col-lg-8 py-5 pro-head">
                        <h1 class="wow fadeInLeft">NEW ARRIVALS</h1>
                        
                    </div>
                </div>
                <div class="row">
                    <?php    while($single_data = $data -> fetch_assoc()): ?>
                    <div class="col-lg-3 col-md-6  col-sm-12">
                        <div class="product-item">
                            <div class="pi-pic">
                                <a href="view.php?id=<?php echo $single_data['id'];?>"><img src="photos/<?php echo $single_data['photo'];?>" alt=""></a>
                            </div>
                            <div class="pi-text">
                                <h6><?php echo $single_data['price'];?></h6>
                                <p><?php echo $single_data['titel'];?> </p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </section>
<!--Shopping ends-->




    <!-- Start Products  -->
    <section>
        <div class="container pro-down" id="products">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1 class="wow fadeInLeft">Featured Products</h1>
                        <p class="wow fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <?php
                
                 $sql = "SELECT * FROM products";
                 $data = $connection ->query($sql);
                    while($single_data = $data -> fetch_assoc()): 
                ?>
                <div class="col-lg-3 col-md-6 ">
                    <div class="products">
                        <div class="pro-img">

                            <img src="photos/<?php echo $single_data['photo']; ?>" class="img-fluid" alt="Image">

                        </div>
                        <div class="why-text">
                            <h4><?php echo $single_data['titel'];?></h4>
                            <h5> <?php echo $single_data['price'];?></h5>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
        </div>
    </section>
    <!-- End Products  -->

 <!--contact part start-->
    <section>
        <div class="container" id="contact_part">
            <div class="row justify-content-center">
                <div class="col-lg-12 py-5 my-4 text-center">
                    <div class="contact-head">
                        <h2>Contact Us</h2>
                        <img src="img/se_head_br.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores hic, omnis odit, inventore ipsam dolorum non nemo neque ea laudantium soluta amet! Tempore molestiae, magni animi placeat quia nihil doloribus. ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="share">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="social">
                        <ul>
                            <li><a href="facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="google.com"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="youtube.com"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="linkidin.com"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <!--Footer start-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>All Rights Reserved. &copy; 2020 <a href="#">E-Shopper</a> </p>
                </div>
            </div>
        </div>
    </div>

    <!--Footer end-->







    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    <script>
       new WOW().init();
        $(function($){
    
   
      //animation scroll js
	$('a[href*="#"]:not([href="#').on('click', function () {
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top 
				}, 1000);
				return false;
			}
		}
	});
});
    </script>
</body>

</html>
