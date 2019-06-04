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
                        
                        <div class="navbar-nav">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="shop.php" class="nav-item nav-link active">Shop</a>
                            <a href="#" class="nav-item nav-link">Contact</a>
                            <a href="#" class="nav-item nav-link mr-auto">Login</a>
                        </div>
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
            <!-- <div class="row background-black">
                <div class="col-lg-3 col-md-5">
                    <h2>SHOP</h2>
                </div>
                <div class="col-lg-9 col-md-7">
                    <p>See our selection of fantastic burgers, drinks and menus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea debitis reiciendis doloremque. Molestias repellendus reiciendis ipsa laborum quisquam, praesentium beatae voluptatum dolorum incidunt hic optio aperiam excepturi esse nihil quia?</p>
                </div>
            </div> -->

            <!-- Articles -->
            <div class="row shop">
                <article class="col-sm-6 col-lg-4 d-flex flex-column">
                    <img class="img-fluid" src="img/burger-1.png" alt="The classic and tasty Big Burger">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Big Burger</h3>
                        <p>The classic and beloved Big Burger made with fresh tomatoes, crispy salat and creamy cheese.</p>
                        <h4 class="mt-auto">42.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: burger</p>
                        </div>
                    </div>
                </article>
                <article class="col-sm-6 col-lg-4 d-flex flex-column">
                    <img class="img-fluid" src="img/burger-2.png" alt="The Bigger Burger with extra crispy bacon">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Bigger Burger</h3>
                        <p>The badass Bigger Burger everything the Big Burger was and MORE! With tasty bacon, pickles and extra size.</p>
                        <h4 class="mt-auto">40.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: burger</p>
                        </div>
                    </div>
                </article>
                <article class="col-sm-6 col-lg-4 d-flex flex-column">
                    <img class="img-fluid" src="img/burger-3.png" alt="The fluffy and juicy Shroom Burger">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Big Shroom Burger</h3>
                        <p>Try the Big Shroom Burger, with mushrooms, avocado and our special shroom sauce</p>
                        <h4 class="mt-auto">45.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: burger, special</p>
                        </div>
                    </div>
                </article>

                </article>
                <article class="col-sm-6 col-lg-4  d-flex flex-column">
                    <img class="img-fluid" src="img/burger-4.png" alt="Double the patty double the taste">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Big Double Burger</h3>
                        <p>Twice the patty, twice the taste, with the Big Double Burger</p>
                        <h4 class="mt-auto">50.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: burger</p>
                        </div>
                    </div>
                </article>

                </article>
                <article class="col-sm-6 col-lg-4  d-flex flex-column">
                    <img class="img-fluid" src="img/nuggets-1.png" alt="Big nuggets, made from chicken and fried right up">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Big Nuggets</h3>
                        <p>Try out delicious Big Nuggets, now made from real chicken</p>
                        <h4 class="mt-auto">20.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: nuggets</p>
                        </div>
                    </div>
                </article>

                <article class="col-sm-6 col-lg-4  d-flex flex-column">
                    <img class="img-fluid" src="img/fries-1.png" alt="Fries made with Big Burger's secret spice mix">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Big Fries</h3>
                        <p>Out own fries made with Big Burger's secret spice mix</p>
                        <h4 class="mt-auto">25.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: fries</p>
                        </div>
                    </div>
                </article>

                <article class="col-sm-6 col-lg-4  d-flex flex-column">
                    <img class="img-fluid" src="img/cola.png" alt="Big Soda">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Big Soda</h3>
                        <p>Nice and fizzy soda</p>
                        <h4 class="mt-auto">15.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: soda, cold drink</p>
                        </div>
                    </div>
                </article>

                <article class="col-sm-6 col-lg-4  d-flex flex-column">
                    <img class="img-fluid" src="img/Coffee-2.png" alt="Freshly brewed coffe">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Big Coffe</h3>
                        <p>Freshly brewed coffe for when you just can't stay awake</p>
                        <h4 class="mt-auto">15.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: coffee, warm drink</p>
                        </div>
                    </div>
                </article>

                <article class="col-sm-6 col-lg-4  d-flex flex-column">
                    <img class="img-fluid" src="img/menu-1.png" alt="A Big Burger, a large Soda and large fries">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Big Burger Menu</h3>
                        <p>A Big Burger, a large Soda and large fries</p>
                        <h4 class="mt-auto">100.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: menu, burger, soda, fries</p>
                        </div>
                    </div>
                </article>

                <article class="col-sm-6 col-lg-4  d-flex flex-column">
                    <img class="img-fluid" src="img/menu-3.png" alt="A Bigger Burger, a large Soda and large fries">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Bigger Burger Menu</h3>
                        <p>A Bigger Burger, a large Soda and large fries</p>
                        <h4 class="mt-auto">110.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: menu, burger, soda, fries</p>
                        </div>
                    </div>
                </article>

                <article class="col-sm-6 col-lg-4 d-flex flex-column">
                    <img class="img-fluid" src="img/menu-1.png" alt="Big Shroom Burger, large Soda and large fried">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Shroom Burger Menu</h3>
                        <p>A Big Shroom Burger, a large Soda and large fries</p>
                        <h4 class="mt-auto">100.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: menu, burger, soda, fries</p>
                        </div>
                    </div>
                </article>

                <article class="col-sm-6 col-lg-4 d-flex flex-column">
                    <img class="img-fluid" src="img/menu-4.png" alt="Big Coffee and Big Nuggets">
                    <div class=" d-flex flex-column flex-grow-1">
                        <h3>Nuggets n' Coffee Menu</h3>
                        <p>THIS WEEK ONLY: A Big Coffee and Big Nuggets</p>
                        <h4 class="mt-auto">50.00 kr.</h4>
                        <button class="btn">Buy</button>
                        <div class="meta">
                            <p>Today: By Birk</p>
                            <p>Catagory: coffee, nuggets</p>
                        </div>
                    </div>
                </article>
                
            </div>
        </main>
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
