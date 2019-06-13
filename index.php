<?php
    $title = "Home";
    $desc = "Quality burgers, fries and wraps";
    // session_start();
    // if(isset($_SESSION['username'])){
    //     echo "<p> Username : ".$_SESSION['username']."</p>";
    // } else{
    //     echo "<p>steve</p>";
    // }

    require "header.php" 
 ?>

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
<?php
    require "footer.php" 
 ?>