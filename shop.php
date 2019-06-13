<?php
$title = "Shop";
$desc = "Buy from our wide selection of big burger products";
 require "header.php" 
 ?>
        <!-- MAIN -->
        <main>
            <?php
                if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
                    ?>
                    <!-- Create Product -->
                        <h2>New Product</h2>
                        <form class="row" action="assets/addProduct.php" method="post">
                            <!--Sets Heading/Product name-->
                            <div class="col-md-12 form-group">
                                <label for="heading">Heading</label>
                                <input class="form-control" id="heading" type="text" name="heading" placeholder="Heading here..." required>
                            </div>
                            <!--Sets Content-->
                            <div class="col-md-12 form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control rounded-1" id="exampleFormControlTextarea1 content" rows="8" type="textarea" name="content" placeholder="Content here..." required></textarea>
                                <!--<input class="form-control" id="content" type="textarea" name="content" placeholder="Content here..." required>-->
                                
                            </div>
                            <!--Sets Category-->
                            <div class="col-md-6 form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" type="text" name="category" placeholder="Select category" required>
                                    <!--Gets all categories from the database -->
                                    <?php 
                                    require "assets/getCategories.php";
                                    ?>
                                </select>
                            </div>
                            <!--Sets AuthorId -->
                            <!-- <div class="col-md-6 form-group">
                                <label for="authorId">Author</label>
                                <input class="form-control" id="authorId" type="number" name="authorId" placeholder="AuthorId here..." required>
                            </div> -->
                            <!--Sets Image source -->
                            <div class="col-md-6 form-group">
                                <label for="imgSrc">Image Source</label>
                                <input class="form-control" id="imgSrc" type="text" name="imgSrc" placeholder="ImgSrc here..." required>
                            </div>
                            <!--Sets Image Alt text -->
                            <div class="col-md-6 form-group">
                                <label for="imgAlt">Image Alt text</label>
                                <input class="form-control" id="imgAlt" type="text" name="imgAlt" placeholder="ImgAlt here..." required>
                            </div>
                            <!--Sets Price -->
                            <div class="col-md-6 form-group">
                                <label for="price">Price</label>
                                <input class="form-control" id="price" type="number" name="price" placeholder="price here..." required>
                            </div>
                            <!--Post -->
                            <div class="col-md-6 form-group d-flex">
                                <input class="btn btn-primary btn-large mt-auto" type="submit" value="Add">
                            </div>
                        </form>
                    <?php
                }
                else{
                    //echo "<p>somethings wrong</p>";
                };
            ?>
            <!-- Articles -->
            <!-- From SQL-->
            <div class="row shop">
                <?php 
                require_once "assets/getArticles.php"
                ?>
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
                    <div class="d-flex flex-column flex-grow-1">
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
                        <p>Our own fries made with Big Burger's secret spice mix</p>
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
        <?php require "footer.php" ?>