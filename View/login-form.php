<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LOGIN</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/regform.css">

</head>

<body>

  <div class="signup-form" style="height: 360px; width: 480px;" >
  
    <div class="form-header">
      <h1>Login</h1>
    </div>
    <div class="form-body">
      <div class="form-group">
        <input type="text" class="form-input" id="email" name="email" placeholder="Email" autocomplete="off" />
      </div>
      <div class="form-group">
        <input type="password" class="form-input" id="password" name="password" placeholder="Password" autocomplete="off" />
      </div>
      <div class="form-group">
        <button type="submit" class="btn" onclick="validateForm()">
          Log in
        </button>
      </div>
      <div class="clearfix">
        <label class="float-left ">Don't have an account? </label>
        <a href="forget-password.php" class="float-right" style="margin-left: 45px;">Forgot Password?</a><br>
        <a href="patients-form.php">Sign up</a> 
      </div>
      <br>
      <!-- </form> -->
    </div>
  </div>

  <script src="Js/login.js"></script>
  <?php include "footer.php" ?>



</body>

</html>