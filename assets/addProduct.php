<?php
    session_start();

    if($_POST['heading']){
        //Set variables for product to input values
        try{
            $heading = $_POST['heading'];
            $content = $_POST['content'];
            $category = $_POST['category'];
            //$authorId = $_POST['authorId'];
            $imgSrc;
            $imgAlt = $_POST['imgAlt'];
            $price = $_POST['price'];
            $time = time();

            $authorId = $_SESSION['id'];

            //IMAGE HANDLING
            //Path to img folder
            $target_dir = "../img/";

            //Takes the input image 
            $target_file = $target_dir . basename($_FILES["imgSrc"]["name"]);
            print_r($_FILES);

            //Is the image OK to upload?
            $uploadOk = 1;

            //Returns extension : e.g (text.txt = txt, site.html = html)
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            //Test if submitted and get image size
            if(isset($_POST["submit"])){
                $check = getimagesize($_FILES["imgSrc"]["tmp_name"]);
                if($check !== false){
                    $uploadOk = 1;
                } else{
                    $uploadOk = 0;
                }
            }

            //Text if image file already exists
            if(file_exists($target_file)){
                $uploadOk = 0;
            }

            //Check if file size is too big
            if($_FILES["imgSrc"]["size"] > 500000){
                $uploadOk = 0;
            }

            //Check if approved format: JPG, JPEG, PNG & GIF files are allowed
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                $uploadOk = 0;
            }

            //Check if uploadOk != 0
            if($uploadOk != 0){
                if(move_uploaded_file($_FILES["imgSrc"]["tmp_name"], $target_file)){
                    $imgSrc = $_FILES["imgSrc"]["name"];
                }
            }



            //Database connection
            require_once "connect.php";

            //Prepare statement
            $statement = $dbh->prepare("INSERT INTO products (heading, content, authorId, imgSrc, imgAlt, price, timeStamp) values(?, ?, ?, ?, ?, ?, ?) ");
            //binds variables to parameters
            $statement->bindParam(1, $heading);
            $statement->bindParam(2, $content);
            $statement->bindParam(3, $authorId);
            $statement->bindParam(4, $imgSrc);
            $statement->bindParam(5, $imgAlt);
            $statement->bindParam(6, $price);
            $statement->bindParam(7, $time);
            //Execute statement
            $statement->execute();
            //Return user to the front page
            header('location:../index.php');

        }
        catch(PDOException $e){
            echo "An exception has occured: " . $e->getMessage();
        }
        
    } else{
        //Return user to the front page
        header('location:../index.php');   
    }
    
?>