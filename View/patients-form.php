<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../View/css/regform.css">
  <title>Patient Registration Form</title>
  <style>
    .login {
      font-family: Ubuntu Mono;
      font-size: 20px;
      color: black;
      text-align: center;
      padding: 20px;
    }
    a:hover{
      color: #44487c;
    }
    </style>
  <script type="text/javascript">
    function validateForm() {
      var x = document.patientreg.fname.value;
      var y = document.patientreg.lname.value;
      var result;

      var fname = lname = email = age = gender = password = bgs = phone = address = cpass = true;

      if (x == "") {
        //span element
        document.getElementById("fname").style.color = "red";
        document.getElementById("fname").innerHTML = "**First name is required";
        fname = false;
      } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(x) === false) {
          document.getElementById("fname").innerHTML = "**First name is invalid";
          fname = false;
        } else {
          document.getElementById("fname").innerHTML = "";  
        }
      }

      // if (y == "") {
      //   document.getElementByID("lname").style.borderColor = "red";
      //   document.getElementById("lname").innerHTML = "**Last name is required";
      //   lname = false;
      // }
      // else{
      //   var regex = /^[a-zA-Z\s]+$/;
      //   if (regex.test(y) === false) {
      //     document.getElementByID("lname").style.borderColor = "red";
      //     document.getElementById("lname").innerHTML = "**Last name is invalid";
      //     lname = false;
      //   } else {
      //     document.getElementById("lname").innerHTML = "";  
      //   }
      // }
     
      if((fname || lname || email || age || gender || password || bgs || phone || address || cpass) == false)
      {
        return false;
      }
      else{
        //show success message
        alert("Registration form filled up successfully");
       
      }
    }   

  </script>


</head>

<body>
  <?php include 'header.html'; ?>

  <form name="patientreg" class="signup-form" onsubmit="return validateForm()" action="../Controller/regform-validate.php" method="post">

    <!-- form header -->
    <div class="form-header">
      <h1>Registration Form</h1>
    </div>

    <!-- form body -->
    <div class="form-body">

      <!-- Firstname and Lastname -->
      <div class="horizontal-group">
        <div class="form-group left">
          <label for="firstname" class="label-title">First name <span style="color:red;">*</span></label>
          <input type="text" id="firstname" name="fname" class="form-input" placeholder="enter your first name" />
        </div>
        <div class="form-group right">
          <label for="lastname" class="label-title">Last name <span style="color:red;">*</span></label>
          <input type="text" id="lastname" name="lname" class="form-input" placeholder="enter your last name" />
        </div>
        <span id="fname" class="text-danger font-weight-bold"></span>
      </div>
      
      <!-- Email -->
      <div class="form-group">
        <label for="email" class="label-title">Email <span style="color:red;">*</span></label>
        <input type="email" id="email" name="email" class="form-input" placeholder="enter your email">
      </div>

      <!-- Gender and Hobbies -->
      <div class="horizontal-group">
        <div class="form-group left">
          <label class="label-title">Gender: <span style="color:red;">*</span></label>
          <div class="input-group">
            <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
            <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
          </div>
        </div>
        <div class="form-group right">
          <label for="age" class="label-title">Age <span style="color:red;">*</span></label>
          <br>
          <input type="range" min="0" max="100" step="1" value="0" id="age" name="age" class="form-input" onChange="change();" style="height:28px;width:78%;padding:0;">
          <span id="range-label">0</span>
        </div>
      </div>

      <!-- Passwrod and confirm password -->
      <div class="horizontal-group">
        <div class="form-group left">

          <label for="password" class="label-title">Password <span style="color:red;">*</span></label>
          <input type="password" id="password" name="password" class="form-input" placeholder="enter your password">
        </div>
        <div class="form-group right">
          <label for="confirm-password" class="label-title">Confirm Password <span style="color:red;">*</span></label>
          <input type="password" class="form-input" id="confirm-password" name="confirm-password" placeholder="enter your password again">
        </div>
      </div>


      <!-- Source of Income and Income -->
      <div class="horizontal-group">
        <div class="form-group left">
          <label class="label-title">Blood Group</label>
          <select class="form-input" name="bgs" id="level">
            <option value="none">None</option>
            <option value="Apos">A+</option>
            <option value="Aneg">A-</option>
            <option value="Bpos">B+</option>
            <option value="Bneg">B-</option>
            <option value="ABpos">AB+</option>
            <option value="ABneg">AB-</option>
            <option value="Opos">O+</option>
            <option value="Oneg">O-</option>
          </select>
        </div>
        <div class="form-group right">
          <label for="contact" class="label-title">Phone <span style="color:red;">*</span></label>
          <input type="number" id="income" class="form-input" name="contact" placeholder="enter your number">
        </div>
      </div>

      <!-- Profile picture and Age -->


      <!-- Address -->
      <div class="form-group">
        <label for="choose-file" class="label-title">Present Address: </label>
        <textarea class="form-input" name="address" rows="4" cols="50" style="height:auto"></textarea>
      </div>
    </div>

    <!-- form-footer -->
    <div class="form-footer">
      <span style="color:red;">*</span><span> required</span>
      <button type="submit" class="btn" name="patient">Confirm</button>
    </div>

  </form>

  <div class="login" >
    Already have an account?
    <a href="login-form.php" >Sign in</a>
  </div>
  <!-- Script for range input label -->
  <script>
    var rangeLabel = document.getElementById("range-label");
    var age = document.getElementById("age");

    function change() {
      rangeLabel.innerText = age.value + "Yrs";
    }
  </script>



  <?php include 'footer.php'; ?>


</body>
</html>