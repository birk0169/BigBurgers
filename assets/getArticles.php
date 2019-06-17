<?php 
    //connect to Database
    require "connect.php";

    //Pull data from products table
    $statement = $dbh->prepare("SELECT products.*, users.dbUsername FROM products 
    JOIN users ON products.authorId = users.id ORDER BY id DESC");
    $statement->execute();

    //While there is rows remaining in $statement the loop continues
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        // echo "<pre style='color: white'>";
        // print_r($row);
        // echo "</pre>";
        ?>
            <article class="col-sm-6 col-lg-4 d-flex flex-column">
                    <!-- image -->
                    <img class="img-fluid" src="img/<?php echo $row['imgSrc']; ?>" alt="<?php echo $row['imgAlt']; ?>">
                    <div class=" d-flex flex-column flex-grow-1">
                        <!-- heading -->
                        <h3><?php echo $row['heading']; ?></h3>
                        <!-- content -->
                        <p><?php echo $row['content']; ?></p>
                        <h4 class="mt-auto"><?php echo $row['price']; ?> kr.</h4>
                        <button class="btn">Order</button>
                        <!-- meta: timestamp, author and catagory -->
                        <div class="meta">
                            <p class="time"><?php /* setlocale(LC_ALL, "danish") */ echo date("Y-m-d", $row['timeStamp']); ?>: By <?php echo $row['dbUsername']; ?></p>
                            <p>Catagory: <?php /*echo $row['categoryId'];*/ ?></p>
                        </div>
                        <?php 
                            if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
                                //Level 1 users can delete any article
                                if($_SESSION['accessLevel'] == 1){
                                    echo "<a class='btn delete-button' href='delete-article.php?id=".$row['id']."'>Delete</a>";
                                }
                                //Level 2 users can only delete their own articles
                                else if($_SESSION['accessLevel'] == 2 && $row['dbUsername'] == $_SESSION['username']){
                                    echo "<a class='btn delete-button' href='delete-article.php?id=".$row['id']."'>Delete</a>";
                                }
                            }
                            
                        ?>
                    </div>
                </article>
        <?php
    }
    $dbh = null;