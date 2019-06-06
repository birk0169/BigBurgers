<?php
    //Set Variables
    //$driver = "mysql";
    $servername = "localhost";
    $dbName = "big_burger";
    $username = "root";
    $password = "";

    //Connect to Database
    try{
        //Myseql database
        $dbh = new PDO("mysql:host=$servername;dbname=$dbName; charset=utf8", $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "success";
        //Connection Sucessfull
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        //Connection Failed
    }
    
?>