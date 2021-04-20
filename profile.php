<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        #right{
            text-align: right;
        }
        #center{
            text-align: center;
        }
        .xlarge{
            font-size: x-large;
        }
        input,textarea {
            padding: 10px;
            border: 1px solid #E5E5E5;
            width: 200px;
            color: #999999;
            box-shadow: rgba (0,0,0,0.1) 0px 0px 8px;
            -moz-box-shadow: rgba (0,0,0,0.1) 0px 0px 8px;
            -webkit-box-shadow: rgba (0,0,0,0.1) 0px 0px 8px;
        }
        textarea{
            width:400px;
            height:150px;
            max-width:400px;
            line-height: 18px;
        }
        input:hover, textarea:hover,
        input:focus, textarea:focus {
        border-color: 1px solid #C9C9C9 ;
        box-shadow: rgba (0,0,0,0.1) 0px 0px 8px;
        -moz-box-shadow: rgba (0,0,0,0.1) 0px 0px 8px;
        -webkit-box-shadow: rgba (0,0,0,0.1) 0px 0px 8px;
        }
        .form label{
            margin-left: 10px;
            color: #999999;
        }
        .submit input{
            width:100px;
            height: 40px;
            background-color: #474E69;
            color: #FFF;
        }
    </style>
</head>
<?php // line 19-38 corresponds to OW 16-1
	$myUserName = "id16374744_foodies"; // line 19-22 remote connect to database
	$myPassword = "IS424Group2!";
	$myLocalHost = "localhost";
	$myDB = "id16374744_foodiesdb";

	$conn = mysqli_connect($myLocalHost, $myUserName, $myPassword, $myDB); // line 24-27 test connection status
	if (!$conn) {
		die ("Connection failed: ");
	}

    $user_ID = $_GET['user']; // Pull user ID from end of URL
    $user_pull_sql = "SELECT * FROM `User` WHERE `user_ID` = '$user_ID'"; // Query to pull the user info from the database
    $result = mysqli_query($conn, $user_pull_sql); // Run the query
    $user_row = mysqli_fetch_array($result); // Bring the result into an array consisting of the row of user data
	
	$review_pull_sql = "SELECT * FROM `Review` WHERE `user_ID` = '$user_ID'"; // Pull review information from databse
	$result1 = mysqli_query($conn, $review_pull_sql); // Run the query and test if successful
	if (!$result1) {
					die("cannot proceed select query");
	}
?>
<body>
    <nav>
        <h1>logo</h1>
    </nav>
    <nav id="right">
        <a href="Sign-in.php">Back to login in</a>
		<a href="index.html"> Home Page</a>
    </nav>
    <nav id="center">
        <img src="placeholder?.gif"/> <br>

            <?php
                echo "<p><b>Your name is " . $user_row['user_name'] . "</b></p>";
                echo "<p><b>Your email address is " . $user_row['email'] . "</b></p>";
				$num = mysqli_num_rows($result1);
				if ($num > 0){
					echo "<b>Your reviews and associated ratings are</b>";
					echo "<br>";
					while($review_row = mysqli_fetch_assoc($result1)) {
						echo $review_row["content"];
						echo "&nbsp;&nbsp;&nbsp";
						echo $review_row["score"];
						echo "<br>";
					}
				}
				else {
					echo "no rows found";
				}
            ?>
    </nav>
    <nav id="center">
        <h2>Review Form</h2>
        <form action="review.php" method="post" class="form" id="reviewform">
            
            <p class="date">
                <label for="date">Review date:</label>
                <input type="date" id="date" name="date" value='<?php echo date('Y-m-d');?>' 
                min="2021-01-01" max="2030-12-31">
            </p>
            <p class="restaurantID">
                <label for="restaurantID">RestaurantID:</label>
                <input type="text" id="restaurantID">
            </p>

            <p class="categoryID">
                <label for="categoryID">CategoryID:</label>
                <input type="text" id="categoryID">
            </p>

            <p class="dishID">
                <label for="dishID">DishID:</label>
                <input type="text" id="dishID">
            </p>

            <p class="score">
                <label for="score">Rate the dish:</label>
                <select id="score" name="score" form="reviewform">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </p>

            <p class="text">
                <textarea type="text" name="review" placeholder="Write your review here"></textarea>
            </p>
            <p class="submit">
                <input type="submit" name="submit1" value="Submit">
            </p>
        </form>
    </nav>
    <p id="center" class="xlarge">
        <a href="FAQs.html">Any questions for us? </a>
    </p>
</body>
</html>