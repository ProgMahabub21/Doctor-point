<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Password</title>
  <link rel="stylesheet" href="css/regform.css" />
  <style>
    .form-header h2 {
      font-size: 27px;
      text-align: center;
      color: #189AB4;
      padding: 20px 0;
      border-bottom: 1px solid #cccccc;
    }
    .font1 {
      font-size: 1rem;
      color: #495057;
    }
    ::placeholder {
      color: #F5B2A6 ;
      opacity: 1;
    }
    

    /* link: https://www.canva.com/colors/color-palettes/summer-splash/ -- colorpalette */
  </style>
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body style=" background-color: #D4F1F4;">

    <?php include "navbar.php"; ?>
  <!-- <form action="../Controller/update-password.php" method="POST" style="display: inline-block;"> -->
  <div class="signup-form" style="height: auto; width: 480px">
    <div class="form-header" style="background-color:aquamarine">
      <h2> Password Change </h2>
    </div>

    <div class="form-body">
      <div class="form-group">
        <input type="password" class="form-input" id="OldPassword" name="OldPassword"  placeholder="*Enter Current Password">
      </div>
      <div class="form-group">
        <span id="erroldpass" style="color: red; font-weight:bold; font-size:15px;"></span>
      </div>
      <br>
      <div class="form-group">
        <input type="password" class="form-input" id="Newpassword" name="Newpassword" placeholder="*Enter New Password">
      </div>
      <div class="form-group">
        <span id="errnewpass" style="color: red; font-weight:bold; font-size:15px;"></span>
      </div>
      <br>
      <div class="form-group">
        <input type="password" class="form-input" id="Repassword" name="Repassword" placeholder="*Retype New Password">
      </div>
      <div class="form-group">
        <span id="errconfirmpass" style="color: red; font-weight:bold; font-size:15px;"></span>
      </div>
      <br>



      <!-- <input type="submit" value="Confirm"> -->
    </div>
    <div class="form-footer">
      <span style="color:red;">*</span><span> required</span>
      <button class="btn" style="background-color:#44487c" onclick="validateForm()">Confirm</button>
      <!-- <input type="submit" class="btn" name="patient" value="Confirm"> -->
    </div>
  </div>

  ,<script src="Js/updatepass.js"></script>

  <?php include "footer.php";?>

</body>

</html>