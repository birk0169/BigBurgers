
<?php 
$title = "Login";
$desc = "Login";
require "header.php";

//Make DB with users and make user

//Catch data from login form
$formUsername = $_POST['formUsername'];
$formPassword = $_POST['formPassword'];
// echo $formUsername." ".$formPassword;

//Connect to DB
require_once "assets/connect.php";

//Get all users
$statement = $dbh->prepare("SELECT * FROM users WHERE dbUSername = ? AND dbPassword = ?");
//bind paremeters
$statement->bindParam(1, $formUsername);
$statement->bindParam(2, $formPassword);
//Execute statement
$statement->execute();

//Check if login is valid
if(empty($row = $statement->fetch()) ){
    //Invalid login
    echo "<p class=\"errorMsg\">incorrect username or/and password!</p>";
    header("Refresh:5; url=index.php", true, 303);
} else{
    //Valid login
    //Start session
    $_SESSION['username'] = $row['dbUsername'];
    $_SESSION['accessLevel'] = $row['accessLevel'];
    $_SESSION['id'] = $row['id'];

    // echo "correct login";
    // header("Refresh:5; url=index.php", true, 303);
    header('location:index.php');
}

$dbh = null;
 require "footer.php";
 //Header problem fixed, remove end php tag in documents that only contain php : https://www.youtube.com/watch?v=_WYExkPyYuc