<?php
    ob_start();
    $title = "Register";
    $desc = "Register new user";
    require "header.php";

    // session_start();
    if(isset($_SESSION['username'])){
        header("location: index.php");
    }
    echo '
    <main>
        <h2>New Account</h2>
        <form id="register" action="'. $_SERVER['PHP_SELF'].'" method="post">
            <div class="form-group">
                <label for="formNewUsername">Input Username</label>
                <input id="formNewUsername" name="formNewUsername" class="form-control" type="text" placeholder="input username" required>
            </div>
            <div class="form-group">
                <label for="formPassword1">Input Password</label>
                <input id="formPassword1" name="formPassword1" class="form-control" type="password" placeholder="input password" required>
            </div>
            <div class="form-group">
                <label for="formPassword2">Confirm Password</label>
                <input  id="formPassword2" name="formPassword2" class="form-control" type="password" placeholder="Confirm password" required>
            </div>
            <input class="btn btn-large btn-primary" type="submit" value="Submit">
        </form>
    </main>
';


   
    //Check if form has been posted
    if(isset($_POST['formNewUsername'])){
        echo "test";
        //header("location: index.php");

        //Save data from user input in variables
        $formUsername = $_POST['formNewUsername'];
        $formPassword1 = $_POST['formPassword1'];
        $formPassword2 = $_POST['formPassword2'];

        //Connect to db
        require "assets/connect.php";

        //Check if there is any existing user who users the username
        $statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ?");
        $statement->bindParam(1, $formUsername);
        $statement->execute();

        if($row = $statement->fetch()){
            //User with username already exists in db
            echo "<p class='errorMsg'>ERROR - A user is already using that username!</p>";
            //header("Refresh:3; url=index.php", true, 303);
        }
        else if($formPassword1 != $formPassword2){
            //Input Password and Confirm Password isn't the same.
            echo "<p class='errorMsg'>ERROR - Passwords doesn't match: You  need to write the same password in both.</p>";
            //header("Refresh:3; url=index.php", true, 303);
        }
        else{
            echo "<p class='successMsg'>Confirmed - User saved.</p>";
            $statement = $dbh->prepare("INSERT INTO users(dbUsername, dbPassword) VALUES(?, ?)");
            //Hash password
            $hashedPassword = password_hash($formPassword1, PASSWORD_DEFAULT);
            //Bind paremeters
            $statement->bindParam(1, $formUsername);
            $statement->bindParam(2, $hashedPassword);
            //$statement->execute();
            header('location:index.php');
        }
    }

    require "footer.php";