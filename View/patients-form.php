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
 


</head>

<body>
  <?php include 'header.html'; ?>

  <!-- <form name="patientreg" class="signup-form" action="../Controller/regform-validate.php" onsubmit="validateForm(); return false;"  method="post"> -->
  <div name="patientreg" class="signup-form">
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
        
        
      </div>

      <div class="horizontal-group">
        <div class="form-group left">
          <span id="fname" style="color: red; font-weight:bold; font-size:15px;" ></span>
        </div>
        <div class="form-group right">
          <span id="lname" style="color: red; font-weight:bold; font-size:15px;"></span>
        </div>
      </div>

      <!-- Email -->
      <div class="form-group">
        <label for="email" class="label-title">Email <span style="color:red;">*</span></label>
        <input type="email" id="email" name="email" class="form-input" placeholder="enter your email">
      </div>

      <div class="form-group">
          <span id="erremail" style="color: red; font-weight:bold; font-size:15px;" ></span>
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
        <span id="gender" class="text-danger font-weight-bold"></span>
        <span id="age" class="text-danger font-weight-bold"></span>
      </div>
      <p></p>
      <div class="horizontal-group">
        <div class="form-group left">
          <span id="errgender" style="color: red; font-weight:bold; font-size:15px;" ></span>
        </div>
        <div class="form-group right">
          <span id="errage" style="color: red; font-weight:bold; font-size:15px;"></span>
        </div>
      </div>

      <!-- Passwrod and confirm password -->
      <div class="horizontal-group">
        <div class="form-group left">

          <label for="password" class="label-title">Password <span style="color:red;">*</span> (Min 8 characters)</label>
          <input type="password" id="password" name="password" class="form-input" placeholder="enter your password">
        </div>
        <div class="form-group right">
          <label for="confirm-password" class="label-title">Confirm Password <span style="color:red;">*</span></label>
          <input type="password" class="form-input" id="confirm-password" name="confirm-password" placeholder="enter your password again">
        </div>
      </div>

      <div class="horizontal-group">
        <div class="form-group left">
          <span id="pass" style="color: red; font-weight:bold; font-size:15px;" ></span>
        </div>
        <div class="form-group right">
          <span id="conpass" style="color: red; font-weight:bold; font-size:15px;"></span>
        </div>
      </div>


      <!-- Source of Income and Income -->
      <div class="horizontal-group">
        <div class="form-group left">
          <label class="label-title">Blood Group <span style="color:red;">*</span></label>
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
          <input type="number" id="contact" class="form-input" name="contact" placeholder="enter your number">
        </div>
      </div>

      <div class="horizontal-group">
        <div class="form-group left">
          <span id="errbg" style="color: red; font-weight:bold; font-size:15px;" ></span>
        </div>
        <div class="form-group right">
          <span id="errnum" style="color: red; font-weight:bold; font-size:15px;"></span>
        </div>
      </div>


      <!-- Address -->
      <div class="form-group">
        <label for="choose-file" class="label-title">Present Address: </label>
        <textarea class="form-input" id="address"name="address" rows="4" cols="50" style="height:auto"></textarea>
      </div>
    </div>

    <!-- form-footer -->
    <div class="form-footer">
      <span style="color:red;">*</span><span> required</span>
      <button class="btn" onclick="validateForm()">Confirm</button>
      <!-- <input type="submit" class="btn" name="patient" value="Confirm"> -->
    </div>
  </div>
  <!-- </form> -->

  <div class="login" >
    Already have an account?
    <a href="login-form.php" >Sign in</a>
  </div>
  <!-- Script for range input label -->
  <!-- <script src="../View/Js/regform.js"></script> -->
  <script>
    var rangeLabel = document.getElementById("range-label");
    var age = document.getElementById("age");

    function change() {
      rangeLabel.innerText = age.value + "Yrs";
    }

    function validateForm() {
    
    var x = document.getElementById("firstname").value;
    var y = document.getElementById("lastname").value;
    var z = document.getElementById("email").value;
    var g = document.querySelector( 'input[name="gender"]:checked');  ;
    var a = document.getElementById("age").value;
    var pass = document.getElementById("password").value;
    var conpassd = document.getElementById("confirm-password").value;
    var bg = document.getElementById("level").value;
    var num = document.getElementById("contact").value;
    var add = document.getElementById("address").value;
    // var x = y = null;
    var result;

    var fname = lname = email = age = gender = password = bgs = phone = address = cpass = true;

    if (x == "") {
      //span element
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

    if (y == "") {
 
      document.getElementById("lname").innerHTML = "**Last name is required";
      lname = false;
    }
    else{
      var regex = /^[a-zA-Z\s]+$/;
      if (regex.test(y) === false) {

        document.getElementById("lname").innerHTML = "**Last name is invalid";
        lname = false;
      } else {
        document.getElementById("lname").innerHTML = "";  
      }
    }

    //check valid email
    if (z == "") {

      document.getElementById("erremail").innerHTML = "**Email is required";
      email = false;
    } else {
      var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if (regex.test(z) === false) {

        document.getElementById("erremail").innerHTML = "**Email is invalid";
        email = false;
      } else {
        document.getElementById("erremail").innerHTML = "";  
      }
    }
    // check if gender is selected or not
    if(g == null){
  
      document.getElementById("errgender").innerHTML = "**Select a Gender";
      gender= false;
    }
    if(a == '0')
    {
  
      document.getElementById("errage").innerHTML = "**Age can't be 0";
      age = false;
    }
    if(pass == "")
    {
      document.getElementById("pass").innerHTML = "**Password is required";
    }
    else
    {
      if(pass.length < 8)
      {
        document.getElementById("pass").innerHTML = "**Password must be atleast 8 characters";
      }
    }

    if(conpassd == "")
    {
      document.getElementById("conpass").innerHTML = "**Confirm Password is required";
    }
    else
    {
      if(conpassd != pass)
      {
        document.getElementById("conpass").innerHTML = "**Password doesn't match";
      }
    }
    if(bg == "none")
    {
      document.getElementById("errbg").innerHTML = "**Blood Group is required";
    }
    if(num == "")
    {
      document.getElementById("errnum").innerHTML = "**Phone number is required";
    }
    else
    {
      if(num.length != 11 || isNaN(num))
      {
        document.getElementById("errnum").innerHTML = "**Phone number is invalid";
      }
    }
    if((fname || lname || email || age || gender || password || bgs || phone || address || cpass) == false)
    {
      //return false;
    }
    else{
      //show success message
      alert("Registration form filled up successfully"+ lname + fname + z + g + a);
     
    }
  }   

  </script>




  <?php include 'footer.php'; ?>


</body>
</html>