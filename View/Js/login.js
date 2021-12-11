function validateForm()
{
    var x = document.getElementById("email").value;
    var y = document.getElementById("password").value;

    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
    if (y == "") {
        alert("Password must be filled out");
        return false;
    }



    $.ajax({
        url: "../Controller/login-form.php",
        type: "POST",
        data: {
            email: x,
            password: y						
        },
        cache: false,
        success: function(dataResult){
            console.log(dataResult.trim());
            
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){
                location.href = "patient-profile.php";						
            }
            else if(dataResult.statusCode==400){
                // $("#error").show();
                // $('#error').html('Invalid EmailId or Password !');
                alert("Invalid EmailId or Password !");
            }
            
        }
    });
}