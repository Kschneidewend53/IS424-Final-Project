<!DOCTYPE html>
<!-- Testing github pull-->
<html lang="en">

<?php

	$myUserName = "id16374744_foodies";

	$myPassword = "IS424Group2!";

	$myLocalHost = "localhost";

	$myDB = "id16374744_foodiesdb";



	$conn = mysqli_connect($myLocalHost, $myUserName, $myPassword, $myDB);

	if (!$conn) {

		die ("Connection failed: ");

	}

?>

<head>

<!-- basic -->

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- mobile metas -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="initial-scale=1, maximum-scale=1">

<!-- site metas -->

<title>Index</title>

<meta name="keywords" content="">

<meta name="description" content="">

<meta name="author" content="">	

<!-- bootstrap css -->

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- style css -->

<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Responsive-->

<link rel="stylesheet" href="css/responsive.css">

<!-- fevicon -->

<link rel="icon" href="images/fevicon.png" type="image/gif"/>

<!-- Scrollbar Custom CSS -->

<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

<!-- Tweaks for older IEs-->

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<!-- owl stylesheets --> 

<link rel="stylesheet" href="css/owl.carousel.min.css">

<link rel="stylesheet" href="css/owl.theme.default.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">



</head>

<body>

	<!--header section start -->

	<div class="header_section">

		<div class="container-fluid">

			<div class="row">

			    <div class="col-sm-12 col-lg-3">

				    <div class="logo"><img src="images/mflogo.jpg" height=5></div>

			    </div>

			    <div class="col-sm-4 col-lg-5">

			    	<div class="menu-area">

                    <nav class="navbar navbar-expand-lg ">

                        <!-- <a class="navbar-brand" href="#">Menu</a> -->

                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                        <i class="fa fa-bars"></i>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav mr-auto">

                               <li class="nav-item active">

                                <a class="nav-link active" href="index.html">Home<span class="sr-only">(current)</span></a> </li>

                               <li class="nav-item">

                                <a class="nav-link" href="https://madisonfoodies.000webhostapp.com/sign_up.php">Sign Up</a></li>

                               <li class="nav-item">

                                <a class="nav-link" href="https://madisonfoodies.000webhostapp.com/Sign-in.php">Sign In</a></li>

                               <li class="#" href="#">

      	                        <a class="nav-link" href="FAQ.html">FAQs</a></li>

                               <li class="nav-item" href="#">

      	                        <a class="nav-link" href="terms.html">Terms & Conditions</a></li>

								<li class="nav-item">

								<a class="nav-link" href="https://madisonfoodies.000webhostapp.com/search.php">Search</a></li>
	

                            </ul>

                        </div>

                    </nav>

                </div>

			    </div>

			    <div class="col-sm-8 col-lg-4">

			    	<div class="togle_3">

                  <div class="left_main">

                     <div class="menu_main">

                        <a href="https://madisonfoodies.000webhostapp.com/Sign-in.php"><i class="fa fa-fw fa-user"></i> Login</a>

                     </div>

                  </div>

                 </div>

			    </div>



		</div>

		</div>

		<!-- banner section start -->

		<div class="banner_section layout_padding">

			<div class="container-fluid">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            

  <div class="carousel-inner">

    <div class="carousel-item active">

      <div class="row">

				   

				    <div class="col-sm-5">

				    	<h1 class="furniture_text">Welcome</h1>

				    	<h1 class="trends_text">To</h1>

				    	<h1 class="furniture_text">Madison Foodies</h1>

				    	<P class="lorem_text"> LOOKING FOR <b>SUSHI</b> BUT DON'T KNOW WHERE THE <b>BEST OF THE BEST</b> IS? <br>

			CRAVING PIZZA BUT WANT THE <b>FINEST PIZZA</b> THE CITY HAS TO OFFER? <br>

			WANT TO SPREAD THE WORD ABOUT YOUR <b>FAVORITE TACO</b> IN TOWN?</P>

				    	

				    </div>

				    <div class="col-sm-6">

				    	<div><img src="images/sushi1.png" height="600"></div>

				    </div>

			    </div>

    </div>

    <div class="carousel-item">

      <div class="row">

				    

				    <div class="col-sm-5">

				    	<h1 class="furniture_text">Founded</h1>

				    	<h1 class="trends_text">in</h1>

				    	<h1 class="furniture_text">2021</h1>

				    	<P class="lorem_text"> Craving a good, classic sandwich? Don't settle for any average sandwich, search for the best ranked sandwiches in the Madison, Wisconsin area. And don't forget to keep Reviewing to Earn Gold Status! </P>

				    </div>

				    <div class="col-sm-6">

				    	<div><img src="images/sand.png" ></div>

				    </div>

			    </div>

    </div>

    <div class="carousel-item">

      <div class="row">

				    

				    <div class="col-sm-5">

				    	<h1 class="furniture_text">No </h1>

				    	<h1 class="trends_text">Dish</h1>

				    	<h1 class="furniture_text">Left Behind</h1>

				    	<P class="lorem_text"> Create an account for FREE and start reviewing. Once you post a review 3 times, you get gold status. </P>

				    	

				    </div>

				    <div class="col-sm-6">

				    	<div><img src="images/4pizza.png"></div>

				    </div>

			    </div>

    </div>

  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

    <span class="sr-only">Previous</span>

  </a>

  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

    <span class="carousel-control-next-icon" aria-hidden="true"></span>

    <span class="sr-only">Next</span>

  </a>

</div>

				

			</div>

		</div>

	</div>

    <!-- banner section end -->

	<!-- about section start -->

	<div class="layout_padding about_section ">

		<div class="container">

			<h1 class="about_taital">About <span style="background-color: #fee421; color: #fff; padding: 0px 5px;">Us</span> </h1>

			<div class="about_bg">

				<div class="row">

					<div class="col-md-8">

						<p >Madison Foodies is a start-up from Madison, WI that began in 2021, looking to solve your problem when you go to a new restaurant and have no idea what to get. 

				You giddily ask the waitress, "What is the most popular dish?" and they respond, "Well, that depends on what you like!" Immediately you're back to square one. 

				Well, look no further. <b>Madison Foodies is here to help you.</b></p>

			<p> And don't forget to help us, help you!</p>

			<p> Create an account for <b><font color="red">FREE</font></b> and start reviewing. Once you post a review 3 times, you get<br> <font color="gold">gold status.</font></p>

			<p><b> HAVE FUN AND REVIEW ON </b></p>

					</div>

					<div class="col-md-4">

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- about section end -->

	<!-- our furniture section start -->

	<div class="our_furniture_section layout_padding">

		<div class="container">

			<h1 class="about_taital">Our <span style="background-color: #fee421; color: #fff; padding: 0px 5px;">Team</span></h1>

			<p class="market_text">Meet the IS majors behind the idea:</p>

		</div>

	</div>

	<div class="our_section_2">

		<div class="row">

			

			<div class="col-sm-4">

				<div class="image"><img src="images/molly.jpg"></div>

			</div>

			<div class="col-sm-4">

				<div class="image"><img src="images/anna.jpg" ></div>

			</div>

		</div>

		<div class="images_section_2">

			<div class="row">

				<div class="col-sm-4">

					<div class="image_6"><img src="images/kellen.jpg"></div>

				</div>

				<div class="col-sm-4">

					<div class="image_6"><img src="images/chili.jpg"></div>

				</div>

				<div class="col-sm-4">

					<div class="image_6"><img src="images/wenquin.JPG"></div>

				</div>

			</div>

		</div>

	</div>

	<!-- our furniture section end -->

	

	<!-- contact section start -->	

    <div class="layout_padding contact_section">

    	<div class="container">

    		<div class="contact_section_inner">

    			<div class="contact_main">

    				<h1 class="contact_text">Questions? Contact Us</h1>

    				<div class="input_main">

    					<div class="row">

    						<div class="col-sm-6 col-lg-3">

    							<div class="form-group">

                                   <input type="text" class="email-bt" placeholder="Name" name="Email">

                                </div>

    						</div>

    						<div class="col-sm-6 col-lg-3">

    							<div class="form-group">

                                   <input type="text" class="email-bt" placeholder="Phone Number" name="Email">

                                </div>

    						</div>

    						<div class="col-sm-6 col-lg-3">

    							<div class="form-group">

                                   <input type="text" class="email-bt" placeholder="Email" name="Email">

                                </div>

    						</div>

    						<div class="col-sm-6 col-lg-3">

    							

    						</div>

    					</div>

    				</div>

    				<div class="massage_box">

    					<div class="row">

    						<div class="col-sm-8">

    							<form action="/action_page.php">

                                <div class="form-group">

                                  <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="text"></textarea>

                                </div>

                            </form>

    						</div>

    						<div class="col-sm-4">

    							<button class="send_bt">Send</button>

    						</div>

    					</div>

    				</div>

    			</div>

    		</div>

    	</div>

    </div>



	<!-- contact section end -->

	<!-- footer section start -->

	<div class="footer_section layout_padding">

		<div class="container">

			<div class="row">

				

			   

			    <div class="col-md-12">

			    	<div class="useful_main border_right0">

			    		<h2 class="useful_text">Madison Foodies</h2>

			    		<ul >

			    			<li><a href="https://madisonfoodies.000webhostapp.com/sign_up.php">Sign Up</a></li>

			    			<li><a href="https://madisonfoodies.000webhostapp.com/Sign-in.php">Sign In</a></li>

			    			<li><a href="FAQ.html">FAQs</a></li>

			    			<li><a href="terms.html">Terms & Conditions</a></li>

			    		</ul>

			    		

			    		

			    		

			    		

			    		

			    	</div>

			    </div>

			    <div class="col-lg-6 col-md-6 col-sm-6 ">

				   <h2 class="useful_text">Contact Info</h2>

                     <ul class="location">

			    			

			    			<li><img src="images/call-icon.png"><a href="FAQ.html">847-207-0432</a><br></li>

			    			<li><img src="images/email-icon.png"><a href="FAQ.html">mcpaddock@wisc.edu</a> <br></li>

			    			

			    		</ul>

                       



			</div>

		</div>

	</div>

	<!-- footer section end -->	

	<!-- copyright section start -->	

	<div class="copyright">

		<div class="container">

			<p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>

		</div>

	</div>

	<!-- copyright section end -->	



      <!-- Javascript files-->

      <script src="js/jquery.min.js"></script>

      <script src="js/popper.min.js"></script>

      <script src="js/bootstrap.bundle.min.js"></script>

      <script src="js/jquery-3.0.0.min.js"></script>

      <script src="js/plugin.js"></script>

      <!-- sidebar -->

      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

      <script src="js/custom.js"></script>

      <!-- javascript --> 

      <script src="js/owl.carousel.js"></script>

      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

      <script>

         $(document).ready(function(){

         $(".fancybox").fancybox({

         openEffect: "none",

         closeEffect: "none"

         })});

         </script>	



</body>

</html>