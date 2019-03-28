<?php

include "connection.php";

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($username, $password) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}

$countQuery = "select count(id) from users where username='$username' AND password ='$password';";

$result = mysqli_query($con, $countQuery);

while ($row = mysqli_fetch_assoc($result)) {
    if($row["count(id)"]>0){
        //user exists
        
        $row = mysqli_fetch_row(mysqli_query($con, "select id from users where username='$username' AND password = '$password'"));
        $userId = $row[0];
        
        $_SESSION["userid"] = $userId;
        $_SESSION["username"] = $username;
        $_SESSION['loggedin'] = TRUE;
        
        header("location: user/index.php");
        
    }else{
        //user does not exists
        echo "Wrong username or password";
    }
}

mysqli_close($con);


        

    




