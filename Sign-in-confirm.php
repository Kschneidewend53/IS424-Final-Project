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

        //get the username and password

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `User` WHERE `user_name` = '$username' and `password` = '$password'";

        //run the query
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){ //correct email and password
            while($row = mysqli_fetch_array($result)){
                echo "<p>Welcome " . $row['user_name'] . "! You are logged in </p>";
                echo "<p><a href=profile.php?user=" . $row['user_ID'] . ">Go to Profile</a></p>";
                echo "<script> location.href='profile.php?user=" . $row['user_ID'] . "'; </script>";
                exit;
            }
            
        } else {
            echo "<p style=\color:red\">Unsuccesful login</p>";
            echo "<p><a href=\"Sign-in.php\">Sign in</a></p>";
        }

    ?>

</body>
</html>