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

        <!-- MAIN -->
        <main>
            <div class="row background-black">
                <div class="col-lg-3 col-md-5">
                    <h2><span class="cursive">BIG</span> Burger</h2>
                </div>
                <div class="col-lg-9 col-md-7">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptatem officiis magnam ipsam odio officia cupiditate laborum cumque pariatur odit assumenda, aut nesciunt reiciendis ut, illum beatae, explicabo velit accusamus?</p>
                </div>
            </div>

            <!-- Articles -->
            <div class="row">
                <article class="col-md-4 d-flex flex-column">
                    <img class="img-fluid" src="img/burger-1.png" alt="The classic and tasty Big Burger">
                    <div class="d-flex flex-column flex-grow-1">
                        <h3>Big Burger</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptatibus distinctio expedita quod porro consectetur? Quia error autem saepe ex ipsum officiis corrupti minima, blanditiis, debitis accusamus animi culpa veritatis!</p>
                        <button class="btn mt-auto">Buy</button>
                    </div>
                </article>
                <article class="col-md-4 d-flex flex-column">
                    <img class="img-fluid" src="img/burger-2.png" alt="The Bigger Burger with extra crispy bacon">
                    <div class="d-flex flex-column flex-grow-1">
                        <h3>Bigger Burger</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptatibus distinctio expedita quod porro consectetur? Quia error autem saepe ex ipsum officiis corrupti minima, blanditiis, debitis accusamus animi culpa veritatis!</p>
                        <button class="btn mt-auto">Buy</button>
                    </div>
                </article>
                <article class="col-md-4 d-flex flex-column">
                    <img class="img-fluid" src="img/burger-3.png" alt="The fluffy and juicy Shroom Burger">
                    <div class="d-flex flex-column flex-grow-1">
                        <h3>Big Shroom Burger</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptatibus distinctio expedita quod porro consectetur? Quia error autem saepe ex ipsum officiis corrupti minima, blanditiis, debitis accusamus animi culpa veritatis!</p>
                        <button class="btn mt-auto">Buy</button>
                    </div>
                </article>
            </div>
        </main>
    </div>

    <!-- Info -->
    <div class="bottom ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul>
                        <li><a href="#">Customer Service</a></li>
                        <li><a href="#">Job Oppertunities</a></li>
                        <li><a href="#">Fresh salat</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col social">
                    <ul>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Follow us</a></li>
                    </ul>
                </div>
                <div class="col-md-7 news-letter">
                    <form action="">
                        <div class="form-group">
                            <h3>Newsletter</h3>
                            <input type="lastname" class="form-control" aria-describedby="emailHelp" placeholder="Enter firstname">
                            <input type="firstname" class="form-control" aria-describedby="emailHelp" placeholder="Enter lastname">
                            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FOOTER -->
    <footer>
        <h6>Adress: something 5b city</h6>
    </footer>
        
        <!-- JAVASCRIPT -->
        <!-- Bootstrap js -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
        <!-- Custom js -->
        <script src="js/myScript.js"></script>
    </body>
</html>
