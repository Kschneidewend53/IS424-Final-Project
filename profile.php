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
	
    $review_pull_sql = "SELECT `review_ID`, `time`, `content`, `score`, `rest_name`, `dish_name`
                        FROM `Review`
                        LEFT JOIN `Restaurant` ON Review.rest_ID = Restaurant.rest_ID
                        LEFT JOIN `Dish` ON Review.dish_ID = Dish.dish_ID
                        WHERE `user_ID` = '$user_ID'"; // Pull review information from database
	$result1 = mysqli_query($conn, $review_pull_sql); // Run the query and test if successful
	if (!$result1) {
					die("cannot proceed select query");
	}
?>
<body>
    <nav>
        <?php 
            echo "<h1>" . $user_row['user_name'] . "'s Profile Page</h1>"; 
        ?>
    </nav>
    <nav id="right">
        <a href="Sign-in.php">Log Out</a> &nbsp; &nbsp; 
		<a href="index.html"> Home Page</a>
    </nav>
    <nav id="left">
            <?php
                echo "<p><b>Your email address is " . $user_row['email'] . "</b></p>";
				$num = mysqli_num_rows($result1);
				if ($num > 0){
					echo "<b>Your reviews and associated ratings are</b>";
					echo "<br><br>";
                    echo "<table border=`1`>";
					while($review_row = mysqli_fetch_assoc($result1)) {
						echo "<tr height=40>";
                        echo "<td width=100>". $review_row["time"] . "</td>";
                        echo "<td width=400>" . $review_row["dish_name"] . " from " . $review_row["rest_name"] . "</td>";
                        echo "<td width=50>" . $review_row["score"] . "</td>";
						echo "<td width=500>" . $review_row["content"] . "</td>";
						echo "</tr>";
					}
                    echo "</table><br><br><br><br>";
				}
				else {
					echo "no reviews posted yet";
				}
            ?>
    </nav>
    <nav id="center">
        <h2>Review Form</h2>
        <form action="review.php" method="post" class="form" id="reviewform">
            <input name="userID" type="hidden" value="<?php echo $user_ID ?>">
            <p class="date">
                <label for="date">Review date:</label>
                <input type="date" id="date" name="date" value='<?php echo date('Y-m-d');?>' 
                min="2021-01-01" max="2030-12-31">
            </p>
            <p class="rest_name">
                <label for="rest_name">Restaurant:</label>
                <select id="rest_name" name="rest_name" form="reviewform">
                    <?php
                        $restaurant_names_sql = "SELECT DISTINCT `rest_name` FROM `Restaurant`";
                        $result_rest = mysqli_query($conn, $restaurant_names_sql);
	                    if (!$result_rest) {
					        die("cannot proceed select query");
	                    }
                        while($review_row = mysqli_fetch_assoc($result_rest)) {
                            echo "<option value=`" . $review_row["rest_name"] . "`>" . $review_row["rest_name"] . "</option>";
                        }
                    ?>
                </select>
            </p>

            <p class="category_name">
                <label for="category_name">Food Category:</label>
                <select id="category_name" name="category_name" form="reviewform">
                    <?php
                        $category_names_sql = "SELECT DISTINCT `category_name` FROM `Category`";
                        $result_category = mysqli_query($conn, $category_names_sql);
	                    if (!$result_category) {
					        die("cannot proceed select query");
	                    }
                        while($review_row = mysqli_fetch_assoc($result_category)) {
                            echo "<option value=`" . $review_row["category_name"] . "`>" . $review_row["category_name"] . "</option>";
                        }
                    ?>
                </select>
            </p>

            <p class="dish_name">
                <label for="dish_name">Dish Name:</label>
                <select id="dish_name" name="dish_name" form="reviewform">
                    <?php
                        $dish_names_sql = "SELECT DISTINCT `dish_name` FROM `Dish`";
                        $result_dish = mysqli_query($conn, $dish_names_sql);
	                    if (!$result_dish) {
					        die("cannot proceed select query");
	                    }
                        while($review_row = mysqli_fetch_assoc($result_dish)) {
                            echo "<option value=`" . $review_row["dish_name"] . "`>" . $review_row["dish_name"] . "</option>";
                        }
                    ?>
                </select>
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
                <textarea type="text" name="content" placeholder="Write your review here"></textarea>
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