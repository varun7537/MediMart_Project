<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include_once "includes/head.php"; ?>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <title>Login</title>
  </head>
  <body style="background-image: url(assets/bg_image.jpg);
    background-position: center;
    height: 700px;
    background-repeat: no-repeat;
    background-size: cover;">
    <?php include_once "includes/nav.php"; ?>

   <form action="php/signup.inc.php" method="POST">
    <div class="row justify-content-center align-items-baseline">
    <div class="center">
    	<div class="form-group">
        <label for="exampleInputName">Username</label>
        <input type="text" class="form-control" id="exampleInputName" name="username" placeholder="Enter username" required>
      	</div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
      </div>
      <div class="form-group">
        <label>Security Question</label>
        <select class="form-control" name="secque">
          <option>Which is your favourite color?</option>
          <option>Which is your first school?</option>
          <option>Which is your birth place?</option>
        </select>
      </div>
      <div class="form-group">
        <label for="answer">Answer</label>
        <input type="text" class="form-control" id="answer" name="secans" placeholder="Your Answer" required></input>
      </div>
      <center>Already have account? <a href="login.php" id="login">Click Here</a></center>
      <br>
      <center><button type="submit" class="btn btn-primary w-75" name="signup">SignUp</button></center>
    </div> 
    </div> 
  </form>


    <?php include_once "includes/footer.php"; ?> 
  </body>
</html>
