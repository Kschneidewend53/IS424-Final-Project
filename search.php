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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <form action="search.php" method="post"> 
        Search by restaurant:
        <input name="rest" type="text" id="rest" size="20"> 
        &nbsp;
        <input type="submit" name="submit1" value="Search"> 
        <br>
        Search by dish:
        <input name="dish" type="text" id="dish" size="20"> 
        &nbsp;
        <input type="submit" name="submit2" value="Search">
    </form>
    <?php
        if ($_POST['submit1'] || $_POST['submit2'] ) {
            $search1=$_POST['rest'];
            $search2=$_POST['dish'];
        if ($_POST['submit1']){
            $query = "SELECT * FROM alumni WHERE rest_name=$search1";
        }
        
        $result = mysqli_query($conn, $query);
        if (!$result)
                    die("cannot processed select query");
        }
        // close connection
    ?>
</body>
</html>