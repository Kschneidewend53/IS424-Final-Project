<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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
    <form action="search.php?" method="post">  
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
                <input type="submit" name="submit1" value="Search">
            </p> 
    </form>
    <form>
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
                <input type="submit" name="submit2" value="Search">
            </p>
    </form>
    <?php
        function restaurant()
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
        if(isset($_POST['submit1']))
        {
            restaurant();
        }
    ?>
</body>
</html>