<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <form action="search.php" method="post"> 
        Search by restaurant:
        <input name="rest" type="text" id="first" size="20"> <br />
        Search by dish:
        <input name="dish" type="text" id="last" size="20"> <input type="submit" name="submit1" value="Search"> <input type="submit" name="submit2" value="Select All">
    </form>
    <?php
        $myUserName = "id16374744_foodies"; // line 19-22 remote connect to database
        $myPassword = "IS424Group2!";
        $myLocalHost = "localhost";
        $myDB = "id16374744_foodiesdb";
    
        $conn = mysqli_connect($myLocalHost, $myUserName, $myPassword, $myDB); // line 24-27 test connection status
        if (!$conn) {
            die ("Connection failed: ");
        }
        // php code to connection to database
        if ($_POST['submit1'] || $_POST['submit2'] ) {
        // grab the first and last name using POST command, see previous notes // example $search1 = trim($_POST['first']);
        // start with the default and base query
        $query = "SELECT * FROM alumni WHERE 1"; // this is the default mySQL
        // if $search1 is not NULL concatenate to $query like this // $query = $query." AND first_name='$search1'";
        // do this for last name, keep concatenating until all search options // execute the query
        $result = mysqli_query($conn, $query);
        if (!$result)
                    die("cannot processed select query");
        //display the results – same as detail.php using while $row and fetch 
        }
        // close connection
    ?>
</body>
</html>