<?php 
    //connect to Database
    require_once "connect.php";

    //Pull data from categories table
    $statement = $dbh->prepare("SELECT * FROM categories ORDER BY id ASC");
    $statement->execute();

    //While there is rows remaining in $statement the loop continues
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        ?>
            <option><?php echo $row['categoryName']; ?></option>
        <?php
    }
    $dbh = null;
?>