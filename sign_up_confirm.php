<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        //get the name and email

        $myUserName = "id16374744_foodies";
	    $myPassword = "IS424Group2!";
	    $myLocalHost = "localhost";
	    $myDB = "id16374744_foodiesdb";

	    $conn = mysqli_connect($myLocalHost, $myUserName, $myPassword, $myDB);
	    if (!$conn) {
		    die ("Connection failed: ");
	    }

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //check if email already exists
        $user_check_sql = "SELECT * FROM `User` WHERE email = '$email'";
        $result = mysqli_query($conn, $user_check_sql);

        //check if result has 1 or more
        if(mysqli_num_rows($result) > 0) {
            echo "<h1>Sorry!</h1><p>Email already in use. Please login or try a new email instead.</p><p><b><a href=\"Sign-in.php\">Log in</a></b></p>";
        } else {
            echo "<h1> Thanks for Signing Up! </h1><p>Welcome, $username ... We have your email address as $email</p>";
    
            //insert entries into database
            $sql = "insert into User(user_name, email, password) values (\"$username\", \"$email\", \"$password\")";

            if(mysqli_query($conn, $sql)){
                echo "<b><a href=\"Sign-in.php\">Log in</a></b>";
                echo "<script> location.href='Sign-in.php'; </script>";
            } else {
                echo "<p>Error " . mysqli_error($conn) . "</p><p><a href=\"sign_up.php\">Back</a></p>";
            }
        }

    ?>

</body>
</html>