
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
      include_once "includes/head.php";
      include_once "includes/db.inc.php"; 
    ?>
    <link rel="stylesheet" type="text/css" href="css/login1.css">
    <title>Login</title>
  </head>
  <body style="background-image: url(assets/bg_image.jpg);
    background-position: center;
    height: 700px;
    background-repeat: no-repeat;
    background-size: cover;">

    <?php include_once "includes/nav.php"; ?>

   <form action="php/login.inc.php" method="POST">
    <div class="row justify-content-center align-items-baseline">
      <div class="center one">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <center>Don't Have a Account? <a href="signup.php" id="register">Sign Up</a></center>
        <br>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
        <a href="forgot.php" id="forgot">Forgot Password?</a>
      </div>
    </div>
  </form> 


    <?php include_once "includes/footer.php"; ?> 
  </body>
</html>