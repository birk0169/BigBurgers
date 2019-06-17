<?php 
    //Setup
    $title = "Delete";
    $desc = "Delete a Product";
    require "header.php";
    require "assets/connect.php";

    //Pull data from products table
    $statement = $dbh->prepare("SELECT  * FROM products WHERE authorId = ? LIMIT 1");
    $statement->bindParam(1, $_GET['id']);
    $statement->execute();
    $row = $statement->fetch();
    $articleName = "test";

    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
        if($_SESSION['accessLevel'] == 1){
            //Access level 1 users
            
            $statement = $dbh->prepare("DELETE FROM products WHERE id = ?");
            $statement-> bindParam(1, $_GET['id'], PDO::PARAM_INT);
            $statement->execute();
            echo "<h1>Deletion of ".$articleName." complete</h1>";
        }
        else if($_SESSION['accessLevel'] == 2 && $_SESSION['id'] == $row['authorId']){
            //Access Level 2 users, only articles by themselves

            $statement = $dbh->prepare("DELETE FROM products WHERE id = ?");
            $statement-> bindParam(1, $_GET['id'], PDO::PARAM_INT);
            $statement->execute();
            echo "<h1>Article has been deleted</h1>";
        }
        else{
            //Anyone else, can't delete

            echo "<p class='errorMsg'>You do not have permission to delete this</p>";
        }
        
    }
    else{
        echo "<p class='errorMsg'>You need to be logged in to delete a prodruct</p>";
        
    }
    header("Refresh:5; url=shop.php", true, 303);
//Figure out how to delete articles
    $dbh = null;
    require "footer.php";