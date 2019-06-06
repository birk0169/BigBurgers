<?php 
    //connect to Database
    require_once "connect.php";

    //Pull data from products table
    $statement = $dbh->prepare("SELECT * FROM products ORDER BY id DESC");
    $statement->execute();

    //While there is rows remaining in $statement the loop continues
    while($row = $statement->fetch()){
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
                        <button class="btn">Buy</button>
                        <!-- meta: timestamp, author and catagory -->
                        <div class="meta">
                            <p><?php echo $row['timeStamp']; ?>: By <?php echo $row['authorId']; ?></p>
                            <p>Catagory: <?php echo $row['categoryId']; ?></p>
                        </div>
                    </div>
                </article>
        <?php
    }
    $dbh = null;
?>