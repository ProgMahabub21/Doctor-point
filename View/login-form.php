<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
  <?php include "header.html" ?>  
  <div class="login-form">
      <form
        action="../Controller/login-form.php"
        method="POST"
        style="display: inline-block;"
      >
        <h2 class="text-center">ACCOUNT LOGIN</h2>
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            placeholder="Email"
            autocomplete="off"
          />
        </div>
        <div class="form-group">
          <input
            type="password"
            class="form-control"
            id="password"
            name="password"
            placeholder="Password"
            autocomplete="off"
          />
        </div>
        <div class="form-group">
          <button type="submit" class="login-form button">
            Log in
          </button>
        </div>
        <div class="clearfix">
          <label class="float-left form-check-label"
            ><input type="checkbox" /> Remember me</label
          >
          <a href="forget-password.html" class="float-right" style="margin-left: 45px;">Forgot Password?</a>
        </div>
        <br>
        <div class="text-center">
          <p style="font-weight:bold">
            Don't have an account? 
          </p>
        </div>
        <div class="text-center"><a href="patients-form.php">Sign up</a></div>
      </form>
    </div>
    
    <?php  include "footer.php" ?>

  </body>
</html>
