<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Big Burger</title>
        <meta name="description" content="Quality burgers, fries and wraps">

        <!-- BOOTSTRAP -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />

        <!-- Custom css -->
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
    <div class="container">
        <!-- HEADER -->
        <header>
            <nav class="navbar navbar-toggleable-sm navbar-expand-md navbar-inverse navbar-dark">
                <div class="container">
                    <img class="logo img-fluid navbar-left" src="img/temp-logo-2.png" alt="">
                    <button class="navbar-toggler ml-auto hidden-sm-up float-xs-right" data-toggle="collapse" data-target="#mainNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav  d-flex flex-grow-1">
                            <li><a class="pl-2 nav-item nav-link active" href="index.php">Home</a></li>
                            <li><a class="pl-2 nav-item nav-link" href="shop.php">Shop</a></li>
                            <li><a class="pl-2 nav-item nav-link" href="#">Contact</a></li>
                            <li class="ml-md-auto"><a class="pl-2 nav-item nav-link" href="#">Login</a></li>
                        </ul>
                        <!-- <div class="navbar-nav d-flex flex-grow-1">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="shop.php" class="nav-item nav-link">Shop</a>
                            <a href="#" class="nav-item nav-link">Contact</a>
                            <a href="#" class="nav-item nav-link ml-md-auto">Login</a>
                        </div> -->
                    </div>
                </div>
            </nav>

            <!-- Header Image -->
            <div class="row">
                <div class="col px-0">
                    <img class="header-image img-fluid px-0" src="img\header-image-3.jpg" alt="Burger Resturant">
                </div>
            </div>
        </header>
