function sendfeedback()
{

    console.log("validateForm");
    var docname = document.getElementById("docname").value;
    var dept = document.getElementById("dept").value;
    var msg = document.getElementById("message").value;


    if(msg == "")
    {
        alert("Please enter your message");
    
    }
    else {



        $.post("../Controller/feedback-validate.php",{
                    docname: docname,
                    message: message,
                    dept: dept						
                },function name(data) {
            console.log(data);
        });
        // $.ajax({
        //     url: "https://jsonplaceholder.typicode.com/todos/1",
        //     type: "GET",
        //     data: {
        //         docname: docname,
        //         message: message,
        //         dept: dept						
        //     },
        //     cache: false,
        //     success: function(dataResult){
        //         console.log(dataResult.trim());
                
        //         var dataResult = JSON.parse(dataResult);
        //         if(dataResult.statusCode==200){
        //             alert("Feedback submitted successfully");
        //             location.href = "patient-profile.php";						
        //         }
        //         else if(dataResult.statusCode==400){
        //             // $("#error").show();
        //             // $('#error').html('Invalid EmailId or Password !');
        //             alert("Invalid submission");
        //         }
        //         else if(dataResult.statusCode==500){

        //             alert("Server Side Error");
        //         }
                
        //     }
        // });

    }
 
 }