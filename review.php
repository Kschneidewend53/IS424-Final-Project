<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $myUserName = "id16374744_foodies";
	    $myPassword = "IS424Group2!";
	    $myLocalHost = "localhost";
	    $myDB = "id16374744_foodiesdb";

	    $conn = mysqli_connect($myLocalHost, $myUserName, $myPassword, $myDB);
	    if (!$conn) {
		    die ("Connection failed: ");
	    }
        
        $user_ID = $_POST['userID'];
        $review_date = $_POST['date'];
        $rest_name = $_POST['rest_name'];
        $category_name = $_POST['category_name'];
        $dish_name = $_POST['dish_name'];
        $score = $_POST['score'];
        $content = $_POST['content'];
        
        $rest_ID_grab = "SELECT * FROM `Restaurant` WHERE `rest_name` = '$rest_name'";
        $rest_ID_result = mysqli_query($conn, $rest_ID_grab);
        $rest_ID_row = mysqli_fetch_array($rest_ID_result);
        $rest_ID = $rest_ID_row['rest_ID'];

        $category_ID_grab = "SELECT * FROM `Category` WHERE `category_name` = '$category_name'";
        $category_ID_result = mysqli_query($conn, $category_ID_grab);
        $category_ID_row = mysqli_fetch_array($category_ID_result);
        $category_ID = $category_ID_row['category_ID'];

        $dish_ID_grab = "SELECT * FROM `Dish` WHERE `dish_name` = '$dish_name'";
        $dish_ID_result = mysqli_query($conn, $dish_ID_grab);
        $dish_ID_row = mysqli_fetch_array($dish_ID_result);
        $dish_ID = $dish_ID_row['dish_ID'];

        echo $user_ID . "<br>";
        echo $review_date . "<br>";
        echo $rest_name . "<br>";
        echo $rest_ID . "<br>";
        echo $category_name . "<br>";
        echo $category_ID . "<br>";
        echo $dish_name . "<br>";
        echo $dish_ID . "<br>";
        echo $score . "<br>";
        echo $content . "<br>";

    ?>

</body>
</html>
