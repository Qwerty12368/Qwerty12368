<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                    echo "<h4>!This username is already taken!</h4>";
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "<h4>!Something went wrong!</h4>";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
    echo "<h4>!Password cannot be less than 5 characters!</h4>";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
    echo "<h4>!Confirm Passwords should match!</h4>";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "<h4>! Something went wrong... cannot redirect !</h4>";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>




<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="form.css">

    <title>Register system!</title>
</head>
<body>
<div class="container">
    <header>Register Here:</header>
    <form action="" method="post">
      <div class="input-field">
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="" required>
        <label for="inputEmail4">Email or Username</label>
      </div>
      <div class="input-field">
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="" required>
        <!-- <span class="show">SHOW</span> -->
        <label for="inputPassword4">Password</label>
      </div>
      <div class="input-field">
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="" required>
        <!-- <span class="show">SHOW</span> -->
        <label for="inputPassword4">Confirm Password</label>
      </div>
      <div class="input-field">
      <input type="text" class="form-control" id="inputAddress2" name="" placeholder="" required>
        <label for="inputAddress2">Address</label>
      </div>
      <!-- <div class="input-field">
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="" required>
        <label for="inputEmail4">Address</label>
      </div> -->
      <div class="button">
        <div class="inner"></div>
        <button>Register</button>
      </div>
      <div class="signup">
         Already a member? <a href="login.php">Login Now</a>
      </div>
    </form>
  </div>  
</body>
</html>
