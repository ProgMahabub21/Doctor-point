function validateForm()
{
    var oldpass = document.getElementById("OldPassword").value;
    var newpass = document.getElementById("Newpassword").value;
    var confirmpass = document.getElementById("Repassword").value;

    var oldpass_err, newpass_err, confirmpass_err;

    if(oldpass == "")
    {
        document.getElementById("erroldpass").innerHTML = "Please enter your old password";
        oldpass_err = false;
    }
    else
    {
        document.getElementById("erroldpass").innerHTML = "";
        oldpass_err = true;
    }
    if(newpass == "")
    {
        document.getElementById("errnewpass").innerHTML = "Please enter your new password";
        newpass_err = false;
    }
    else
    {
        if(newpass.length < 8)
        {
            document.getElementById("errnewpass").innerHTML = "Password must be at least 8 characters long";
            newpass_err = false;
        }
        else
        {
            document.getElementById("errnewpass").innerHTML = "";
            newpass_err = true;
        }
        
    }
    if(confirmpass == "")
    {
        document.getElementById("errconfirmpass").innerHTML = "Please enter your confirm password";
        confirmpass_err = false;
    }
    else
    {
        if(confirmpass != newpass)
        {
            document.getElementById("errconfirmpass").innerHTML = "Password not match";
            confirmpass_err = false;
        }
        else{
            document.getElementById("errconfirmpass").innerHTML = "";
        
            confirmpass_err = true;
        }
        
    }
    if(oldpass_err == true && newpass_err == true && confirmpass_err == true)
    {
        $.ajax({
            url: "../Controller/update-password.php",
            type: "POST",
            data: {
                OldPassword : oldpass,
                Newpassword : newpass,
                Repassword : confirmpass  						
            },
            cache: false,
            success: function(dataResult){
                console.log(dataResult.trim());
                
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    alert("Password changed successfully");
                    location.href = "patient-profile.php";						
                }
                else if(dataResult.statusCode==400){
                    // $("#error").show();
                    // $('#error').html('Invalid EmailId or Password !');
                    alert("Invalid form submission");
                }
                else if(dataResult.statusCode==500){

                    alert("Server Side Error");
                }
                else if(dataResult.statusCode==801){
                    alert("Old password mismatch");
                }
                else if(dataResult.statusCode==802){
                    alert("New password and confirm password mismatch");
                }
                    
                
            }
        });
        
    }
    else
    {
        alert("Fillup the form properly");
    }
}