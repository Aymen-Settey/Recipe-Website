<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn || SignUp</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/icon.png" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="./css/Signstyle.css" />
  </head>
  <body>
    <div class="overlayy"></div>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="includes/signin.inc.php" method="post">
          <h1>Create An Account</h1>
          <div class="social-container">
            <a href="#">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#">
              <i class="fab fa-google"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <span>use your email for registration!</span>
          <input type="text" name="name" placeholder="Name"  />
          <input type="text" name="email" placeholder="Email"  />
          <input type="text" name="uid" placeholder="Username"  />
          <input type="password" name="pwd" placeholder="Password"  />
          <input type="password" name="pwdrepeat" placeholder="Repeat Password"  />
          <br />

          <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php
 if (isset($_GET["error"]))/*check if the user submitted the form correctly*/ {
    if ($_GET["error"] == "emptyinput") {
        echo "<script>alert('Fill in all fileds!!');</script>";
    }
    else if($_GET["error"] == "invaliduid"){
        echo "<script>alert('choose a proper username!!');</script>";
    }
    else if($_GET["error"] == "invalidemail"){
        echo "<script>alert('choose a proper email!!');</script>";
    }
    else if($_GET["error"] == "passworddeoasnotmatch"){
        echo "<script>alert('passwords doesn\'t match!!');</script>";
    }
    else if($_GET["error"] == "stmtfailed"){
        echo "<script>alert('Something went wrong, try again!!');</script>";  
    }
    else if($_GET["error"] == "usernametaken"){
      echo "<script>alert('username already taken!!');</script>";  
    }
    else if($_GET["error"] == "none"){
        echo "alert('You have Signed Up!!');";
    }
 }
?>

      </div>
      <div class="form-container sign-in-container">
        <form action="includes/login.inc.php" method="post">
          <h1>Sign In</h1>
          <div class="social-container">
            <a href="#">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#">
              <i class="fab fa-google"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <span>Login to your account!</span>

          <input type="text" name="uid" placeholder="Email/UserName..."  />
          <input type="password" name="pwd" placeholder="Password..."  />
          <a href="#">Forgot your password?</a>
          <button type="submit" name="submit">
            Sign In
          </button>
        </form>
        <?php
        if (isset($_GET["error"]))/*check if the user submitted the form correctly*/ {
           if ($_GET["error"] == "emptyinput") {
             echo "<script>alert('fill the form!!');</script>";
           }
           else if($_GET["error"] == "wronglogin"){
            echo "<script>alert('Incorrect login information!!');</script>";
           }
    
 }
?>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Have Already An Account?</h1>

            <p>To connect with us please login with your account here!</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Create Your Account</h1>
            <p>Enter your personal details and start your journey with us!</p>
            <button  class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <footer class="page-footer">
      <p>
        &copy;<span id="date">2023</span
        ><span class="footer-logo"> 7ey's Kitchen</span> Built by
        <a href="#">Aymen Settey</a>
      </p>
    </footer>
    <script src="js/index.js"></script>
  </body>
</html>
