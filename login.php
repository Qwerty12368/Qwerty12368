<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                            
                        }
                    }

                }

    }
}    


}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">

    <title>login system!</title>
  </head>
  <body>


<<div class="container">
      <header>Login</header>
      <form  action="" method="post">
      <div class="input-field">
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="" required>
        <label for="inputEmail4">Email or Username</label>
      </div>
         <!-- <div class="input-field">
            <label for="exampleInputEmail1"></label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
         </div> -->
         <div class="input-field">
         <input type="password" name="password" class="password" id="exampleInputPassword1" placeholder="" required>
            <span class="show">SHOW</span>
            <label for="exampleInputPassword1">Password</label>
         </div>
         <div class="button">
        <div class="inner"></div>
        <button>LOGIN</button>
      </div>
         <!-- <div class="button">
            <div class="inner"></div>
            <button type="submit" class="btn btn-primary">LOGIN</button>
         </div> -->
      </form>
      <div class="auth">
         Or login with
      </div>
      <div class="links">
         <div class="facebook">
            <i class="fab fa-facebook-square"><span>Facebook</span></i>
         </div>
         <div class="google">
            <i class="fab fa-google-plus-square"><span>Google</span></i>
         </div>
      </div>
      <div class="signup">
         Not a member? <a href="register.php">Signup now</a>
      </div>
   </div>
   <!-- Created By CodingNepal -->
   <script>
      var input = document.querySelector('.password');
      var show = document.querySelector('.show');
      show.addEventListener('click', active);

      function active() {
         if (input.type === "password") {
            input.type = "text";
            show.style.color = "#1DA1F2";
            show.textContent = "HIDE";
         } else {
            input.type = "password";
            show.textContent = "SHOW";
            show.style.color = "#111";
         }
      }
   </script>
</body>
</html>
