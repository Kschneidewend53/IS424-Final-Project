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

<title>Sign Up</title>

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

<link rel="icon" href="images/fevicon.png" type="image/gif" />

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

                                <a class="nav-link" href="https://madisonfoodies.000webhostapp.com/sign-up.php">Sign Up</a></li>

                               <li class="nav-item">

                                <a class="nav-link" href="https://madisonfoodies.000webhostapp.com/Sign-in.php">Sign In</a></li>

                               <li class="#" href="#">

      	                        <a class="nav-link" href="FAQ.html">FAQs</a></li>

                               <li class="nav-item" href="#">

      	                        <a class="nav-link" href="contact.html">Terms & Conditions</a></li>

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

  <!-- contact section start -->  

    <div class="layout_padding contact_section">

      <div class="container">

        <div class="contact_section_inner">

          <div class="contact_main">

            <h1 class="contact_text">Sign Up</h1>

            </div>

    <div class="section" >

        <div class="container has-text-centered">

            <div class="wrapper m-5" style = "background-color: red; border: 0.4rem black solid; ">

                <h2>Ready to give your <span class="has-text-weight-bold">TASTEBUDS</span>  the <span class="has-text-weight-bold">RIDE</span>  of the <span class="has-text-weight-bold">CENTURY</span> ? </h2>

                

                <form action="sign_up_confirm.php" method="post">

                    <p class = "m-5" style="color:black;"> Name: <input type="text" name="username"></p>

                    <p class = "m-5" style="color:black;"> Email: <input type="email" name="email"></p>

                    <p class = "m-5" style="color:black;">password: <input type="password" name="password"></p>
       
                    <p> <input type="submit" value="Submit"> </p>

                   
                </form>

        

            </div>

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

			    			<li><a href="https://madisonfoodies.000webhostapp.com/contact.html?">Sign Up</a></li>

			    			<li><a href="https://madisonfoodies.000webhostapp.com/Sign-in.html?">Sign In</a></li>

			    			<li><a href="furnitures.html">FAQs</a></li>

			    			<li><a href="contact.html">Terms & Conditions</a></li>

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