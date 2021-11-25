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

    if (y == "") {
      document.getElementByID("lname").style.borderColor = "red";
      document.getElementById("lname").innerHTML = "**Last name is required";
      lname = false;
    }
    else{
      var regex = /^[a-zA-Z\s]+$/;
      if (regex.test(y) === false) {
        document.getElementByID("lname").style.borderColor = "red";
        document.getElementById("lname").innerHTML = "**Last name is invalid";
        lname = false;
      } else {
        document.getElementById("lname").innerHTML = "";  
      }
    }
   
    if((fname || lname || email || age || gender || password || bgs || phone || address || cpass) == false)
    {
      //return false;
    }
    else{
      //show success message
      alert("Registration form filled up successfully");
     
    }
  }   
