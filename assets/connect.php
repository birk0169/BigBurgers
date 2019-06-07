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
        //echo "success";
        //Connection Sucessfull
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        //Connection Failed
    }
    
    // //1
    // $number = 1;
    // while($number <= 10){
    //     echo "<br>";
    //     echo $number;

    //     $number++;
    // }

    // //2
    // echo "<br>";
    // $number = 0;
    // while($number >= -100){
        
    //     echo "$number ";

    //     $number--;
    // }

    // //3: Buying a robot
    // echo "<br>";
    // $money = 0;
    // $paycheck = 5;
    // $robotCost = 100;
    // $months = 0;
    // while ($money <= $robotCost) {
    //     $money += $paycheck;
    //     $months++;
    // }
    // echo "With your income, You can buy the robot in $months months"
    
?>