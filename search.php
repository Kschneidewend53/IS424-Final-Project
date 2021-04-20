<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="initial-scale=1, maximum-scale=1">

<!-- site metas -->

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
<body>

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

    </div>
    <h1>Search Options</h1>
    <form action="search.php" method="post">  
            <p>
                <label for="rest_name">Search by Restaurant: </label>
                <select id="rest_name" name="rest_name">
                    <?php
                        $restaurant_names_sql = "SELECT DISTINCT rest_name FROM Restaurant";
                        $result_rest = mysqli_query($conn, $restaurant_names_sql);
	                    if (!$result_rest) {
					        die("cannot proceed select query");
	                    }
                        while($review_row = mysqli_fetch_assoc($result_rest)) {
                            $rest_name = $review_row['rest_name'];
                            echo "<option value='".$rest_name."'>".$rest_name."</option>";
                        }
                    ?>
                </select>
                <input type="submit" name="submit_restaurant" value="Search">
            </p> 
    </form>
    <form action="search.php" method="post">
            <p>
                <label for="dish_name">Search by Dish: </label>
                <select id="dish_name" name="dish_name">
                    <?php
                        $dish_names_sql = "SELECT DISTINCT dish_name FROM Dish";
                        $result_dish = mysqli_query($conn, $dish_names_sql);
	                    if (!$result_dish) {
					        die("cannot proceed select query");
	                    }
                        while($review_row = mysqli_fetch_assoc($result_dish)) {
                            $dish_name = $review_row['dish_name'];
                            echo "<option value='".$dish_name."'>".$dish_name."</option>;";
                        }
                    ?>
                </select>
                <input type="submit" name="submit_dish" value="Search">
            </p>
    </form>

    <?php
        function restaurant() //Code to display reviews based on restaurant
        {
            $myUserName = "id16374744_foodies";
            $myPassword = "IS424Group2!";
            $myLocalHost = "localhost";
            $myDB = "id16374744_foodiesdb";
    
            $conn = mysqli_connect($myLocalHost, $myUserName, $myPassword, $myDB);
            if (!$conn) {
                die ("Connection failed: ");
            }
            $rest_name = $_POST['rest_name'];
            $rest_ID_grab = "SELECT * FROM `Restaurant` WHERE `rest_name` = '$rest_name'";
            $rest_ID_result = mysqli_query($conn, $rest_ID_grab);
            $rest_ID_row = mysqli_fetch_array($rest_ID_result);
            $rest_ID = $rest_ID_row['rest_ID'];

            $review_list_sql = "SELECT * FROM `Review` WHERE `rest_ID` = '$rest_ID'";
            $rest_based_result = mysqli_query($conn, $review_list_sql); // Run the query and test if successful
	        if (!$rest_based_result) {
					die("cannot proceed select query");
	        }

            echo "<h1>Reviews for ".$rest_name."</h1>";

            $num = mysqli_num_rows($rest_based_result);
			if ($num > 0){
                echo "<table border=`1`>";
                echo "<tr height=40><td width=100>Date</td><td width=400>Dish Reviewed</td><td width=50>Score</td><td width=500>Review</td></tr>";
				while($review_row = mysqli_fetch_assoc($rest_based_result)) {
                    $dish_ID = $review_row["dish_ID"];
                    $find_dish_sql = "SELECT * FROM `Dish` WHERE `dish_ID` = $dish_ID";
                    $dish_name_result = mysqli_query($conn, $find_dish_sql);
                    $dish_row = mysqli_fetch_array($dish_name_result);
                    $dish_name = $dish_row['dish_name'];

					echo "<tr height=40>";
                    echo "<td width=100>". $review_row["time"] . "</td>";
                    echo "<td width=400>" . $dish_name . "</td>";
                    echo "<td width=50>" . $review_row["score"] . "</td>";
					echo "<td width=500>" . $review_row["content"] . "</td>";
					echo "</tr>";
				}
                echo "</table><br><br><br><br>";
            } else {
                echo "no reviews posted yet";
            }
        }
        if(isset($_POST['submit_restaurant']))
        {
            restaurant();
        }

        function dish() //code to display reviews based on dish
        {
            $myUserName = "id16374744_foodies";
            $myPassword = "IS424Group2!";
            $myLocalHost = "localhost";
            $myDB = "id16374744_foodiesdb";
    
            $conn = mysqli_connect($myLocalHost, $myUserName, $myPassword, $myDB);
            if (!$conn) {
                die ("Connection failed: ");
            }
            $dish_name = $_POST['dish_name'];
            $dish_ID_grab = "SELECT * FROM `Dish` WHERE `dish_name` = '$dish_name'";
            $dish_ID_result = mysqli_query($conn, $dish_ID_grab);
            $dish_ID_row = mysqli_fetch_array($dish_ID_result);
            $dish_ID = $dish_ID_row['dish_ID'];

            $review_list_sql = "SELECT * FROM `Review` WHERE `dish_ID` = '$dish_ID'";
            $dish_based_result = mysqli_query($conn, $review_list_sql); // Run the query and test if successful
	        if (!$dish_based_result) {
					die("cannot proceed select query");
	        }

            echo "<h1>Reviews for ".$dish_name."</h1>";

            $num = mysqli_num_rows($dish_based_result);
			if ($num > 0){
                echo "<table border=`1`>";
                echo "<tr height=40><td width=100>Date</td><td width=400>Restaurant</td><td width=50>Score</td><td width=500>Review</td></tr>";
				while($review_row = mysqli_fetch_assoc($dish_based_result)) {
                    $rest_ID = $review_row["rest_ID"];
                    $find_rest_sql = "SELECT * FROM `Restaurant` WHERE `rest_ID` = $rest_ID";
                    $rest_name_result = mysqli_query($conn, $find_rest_sql);
                    $rest_row = mysqli_fetch_array($rest_name_result);
                    $rest_name = $rest_row['rest_name'];

					echo "<tr height=40>";
                    echo "<td width=100>". $review_row["time"] . "</td>";
                    echo "<td width=400>" . $rest_name . "</td>";
                    echo "<td width=50>" . $review_row["score"] . "</td>";
					echo "<td width=500>" . $review_row["content"] . "</td>";
					echo "</tr>";
				}
                echo "</table><br><br><br><br>";
            } else {
                echo "no reviews posted yet";
            }
        }
        if(isset($_POST['submit_dish']))
        {
            dish();
        }

    ?>
</body>
</html>