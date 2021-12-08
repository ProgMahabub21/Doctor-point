function profileupdate() {
   var age = document.getElementById("age").value;
   var gender = document.getElementById("gender").value;
    var bgs = document.getElementById("bgs").value;
    var num = document.getElementById("contact").value;
    var add = document.getElementById("address").value;

    if(age == '0' || age == '')
    {
        alert("Age is required");
        return false;
    }
    if(gender == '' )
    {   
        alert("Gender is required");
        return false;
    }
    if(bgs== '')
    {
        alert("Bgs is required");
        return false;
    }
    if(num == "")
    {
        alert("Phone number is required")
        return false;
    }
    else
    {
        if(num.length != 11 || isNaN(num))
        {
            alert("Phone number is not valid");
        return false;
        }
        else
        {
            alert("Updating");
        }
    }

    $.ajax({
        url: "../Controller/updateprofile.php",
        type: "POST",
        data: {
            age: age,
            address : add,
            gender: gender,
            bgs : bgs,
            contact : num						
        },
        cache: false,
        success: function(dataResult){
            console.log(dataResult.trim());
            
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){
                alert("Profile Updated Successfully");
                location.href = "patient-profile.php";						
            }
            else if(dataResult.statusCode==400){
                // $("#error").show();
                // $('#error').html('Invalid EmailId or Password !');
                alert("Invalid Request for update");
                location.href = "viewprofile.php";
            }
            else if(dataResult.statusCode==500){
                alert("Internal Server Error");
                location.href = "viewprofile.php";
            }
            
        }
    });


}