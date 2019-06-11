<?php

    if($_POST['heading']){
        //Set variables for product to input values
        try{
            $heading = $_POST['heading'];
            $content = $_POST['content'];
            $category = $_POST['category'];
            $authorId = $_POST['authorId'];
            $imgSrc = $_POST['imgSrc'];
            $imgAlt = $_POST['imgAlt'];
            $price = $_POST['price'];
            $time = time();

            //Database connection
            require_once "connect.php";

            //Prepare statement
            $statement = $dbh->prepare("INSERT INTO products (heading, content, authorId, imgSrc, imgAlt, price, timeStamp) values(?, ?, ?, ?, ?, ?, ?) ");
            //binds variables to parameters
            $statement->bindParam(1, $heading);
            $statement->bindParam(2, $content);
            $statement->bindParam(3, $authorId);
            $statement->bindParam(4, $imgSrc);
            $statement->bindParam(5, $imgAlt);
            $statement->bindParam(6, $price);
            $statement->bindParam(7, $time);
            //Execute statement
            $statement->execute();
            //Return user to the front page
            header('location:../index.php');

        }
        catch(PDOException $e){
            echo "An exception has occured: " . $e->getMessage();
        }
        
    } else{
        //Return user to the front page
        header('location:../index.php');   
    }
    
?>