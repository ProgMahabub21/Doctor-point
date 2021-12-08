function validateForm()
{
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var email_err, newpass_err;


    if(email == "")
    {
        document.getElementById("errmail").innerHTML = "Please enter your account email";
        email_err = false;
    }
    else {
        var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (regex.test(email) === false) {
    
          document.getElementById("errmail").innerHTML = "**Email is invalid";
          email_err = false;
        } else {
          document.getElementById("errmail").innerHTML = ""; 
          email_err = true; 
        }
    }
    if(password == "")
    {
        document.getElementById("errpass").innerHTML = "Please enter your new password";
        newpass_err = false;
    }
    else
    {
        if(password.length < 8)
        {
            document.getElementById("errpass").innerHTML = "Password must be at least 8 characters long";
            newpass_err = false;
        }
        else
        {
            document.getElementById("errpass").innerHTML = "";
            newpass_err = true;
        }
        
    }
    if(email_err == true && newpass_err == true)
    {
        $.ajax({
            url: "../Controller/forget-password.php",
            type: "POST",
            data: {
                email: email,
                password: password						
            },
            cache: false,
            success: function(dataResult){
                console.log(dataResult.trim());
                
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    alert("Password changed successfully");
                    location.href = "login-form.php";						
                }
                else if(dataResult.statusCode==400){
                    // $("#error").show();
                    // $('#error').html('Invalid EmailId or Password !');
                    alert("Invalid EmailId or Password !");
                }
                else if(dataResult.statusCode==500){

                    alert("Server Side Error");
                }
                
            }
        });

    }
    else
    {
        alert("Fillup the form properly");
    }
}