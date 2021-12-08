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

  let fname,lname,email,gender,age,bgs,erpass,conpass,contact;
  fname = true;
  lname = true;
  email = true;
  age =true;
  gender= true;
  bgs =true;
  erpass =true;
  conpass =true;
  contact = true;
 
  

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
      fname = true;  
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
      lname = true; 
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
      email = true; 
    }
  }
  // check if gender is selected or not
  if(g == null){

    document.getElementById("errgender").innerHTML = "**Select a Gender";
    gender= false;
  }
  else {
    document.getElementById("errgender").innerHTML = "";
    gender =true;
  }

  //check if age is defined properly
  if(a == '0')
  {

    document.getElementById("errage").innerHTML = "**Age can't be 0";
    age = false;
  }
  else
  {
    document.getElementById("errage").innerHTML = "";
    age = true;
  }

  // password check

  if(pass == "")
  {
    document.getElementById("pass").innerHTML = "**Password is required";
    erpass = false;
  }
  else
  {
    if(pass.length < 8)
    {
      document.getElementById("pass").innerHTML = "**Password must be atleast 8 characters";
      erpass = false;
    }
    else
    {
      document.getElementById("pass").innerHTML = "";
      erpass = true;
    }
  }
  //confirm password check
  if(conpassd == "")
  {
    document.getElementById("conpass").innerHTML = "**Confirm Password is required";
    conpass = false;
  }
  else
  {
    if(conpassd != pass)
    {
      document.getElementById("conpass").innerHTML = "**Password doesn't match";
      conpass = false;
    }
    else
    {
      document.getElementById("conpass").innerHTML = "";
      conpass = true;
    }
  }
  //check if bg is selected or not
  if(bg == "none")
  {
    document.getElementById("errbg").innerHTML = "**Blood Group is required";
    bgs = false;
  }
  else
  {
    document.getElementById("errbg").innerHTML = "";
    bgs = true;
  }
  //check if phone number is defined properly
  if(num == "")
  {
    document.getElementById("errnum").innerHTML = "**Phone number is required";
    contact = false;
  }
  else
  {
    if(num.length != 11 || isNaN(num))
    {
      document.getElementById("errnum").innerHTML = "**Phone number is invalid";
      contact = false;
    }
    else
    {
      document.getElementById("errnum").innerHTML = "";
      contact = true;
    }
  }


  
  if((fname || lname || email || age || gender || erpass || bgs || contact || conpass ) == false)
  {
    alert("Fillup The form properly");
  }
  else{
    //show success message
    $.ajax({
      url: "../Controller/regform-validate.php",
      type: "POST",
      data: {
         fname: x,
         lname: y,
         age: a,
         address: add,
         bgs: bg,
         contact: num,
         password: pass,
         gender: g,
         email: z					
      },
      cache: false,
      success: function(dataResult){
          console.log(dataResult.trim());
          
          var dataResult = JSON.parse(dataResult);
          if(dataResult.statusCode==200){
              alert("registration done successfully");
              location.href = "login-form.php";						
          }
          else if(dataResult.statusCode==400){
              // $("#error").show();
              // $('#error').html('Invalid EmailId or Password !');
              alert("Invalid form submission");
          }
          else if(dataResult.statusCode==500){

              alert("Server Side Error");
          }
          // else if(dataResult.statusCode==801){
          //     alert("Old password mismatch");
          // }
          // else if(dataResult.statusCode==802){
          //     alert("New password and confirm password mismatch");
          // }
              
          
      }
  });
  
    // alert("Registration form filled up successfully"+ fname + " " + lname+" "+email+" "+age+" "+gender+" "+erpass+" "+bgs+" "+contact);
   
  }
}   