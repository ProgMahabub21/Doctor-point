<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat With Our Doctors</title>
    <link rel="stylesheet" href="css/feedback.css">
    <style>
        body{
            background-color: #f2f2f2;
        }
    </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <?php //include "../Controller/chatlist.php";
    include "navbar.php";
    ?>

    <div class="signup-form">
        <div class="form-header">
            <h1>Chat With Your appointed Doctors</h1>
        </div>
        <div class="form-body">
            <div class="form-group">
                <label for="appid" class="label-title" >Appointment ID:</label><br><br>
                <input type="text" class="form-input" id="appid" name="appid" placeholder="Enter Appointment ID" >

            </div>
            <span id="appid_error" class="error" style="font-weight: bold; color:red "></span><br><br>
            <div class="form-group">
                <button class="btn" style="background-color:#44487c" onclick="verify()" >Continue</button>
            </div>
        </div>
    </div>
  
    <?php include "footer.php"; ?>
    <script src="Js/chatverify.js"></script>
</body>

</html>