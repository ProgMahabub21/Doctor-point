function verify() {
   var id = document.getElementById("appid").value;

   if(id=="") {
      document.getElementById("appid").style.borderColor = "red";
      document.getElementById("appid_error").innerHTML = "Please enter your appointment ID";
      return;
   }
   else
   {
       //create ajax request with jquery
       document.getElementById("appid_error").innerHTML = "";
         $.ajax({
              type: "POST",
                url: "../Controller/chat-process.php",
                data: 'id='+id,
                success: function(data) {
                    console.log(data.trim());
                    var dataResult = JSON.parse(data);
                    if(dataResult.statusCode == '401') {
                        document.getElementById("appid").style.borderColor = "red";
                        document.getElementById("appid_error").innerHTML = "Empty Appointment ID";
                    }
                    else if(dataResult.statusCode == '402') {
                        document.getElementById("appid").style.borderColor = "red";
                        document.getElementById("appid_error").innerHTML = "Invalid Appointment ID";
                    }
                    else if(dataResult.statusCode == '200') {
                        location.href = "chatbox.php";
                    }

                }
            });
   }

}