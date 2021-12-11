<?php
session_start();
$docname=$_SESSION['chatdoc'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        #msg {

            margin: 0 auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .msgdata {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .msgdata::after {
            content: "";
            clear: both;
            display: table;
        }

        .msgdata h4 {
            float: left;
            max-width: 100px;
            width: 100%;
            margin-right: 40px;
            border-radius: 50%;
        }

        .msgdata h4.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
            word-wrap: break-word;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; 
    ?>
    <div class="signup-form">
        <div class="form-header">
            <h1>Welcome to the chat room</h1>
        </div>
        <div class="form-body">
            <?php echo "<div class='label-title'>Doctor Name: $docname</div>"?>
            <div id="msg" style="padding-bottom: 50px; "></div>


            <div class="form-group">


                <input class="form-input" type="text" name="msg" id="message" placeholder="Type message...">

                <button onclick="handelSendMessage()" class="btn">Send</button>

            </div>
        </div>
    </div>


    <script src="Js/script.js"></script>
    <script>
        function handelSendMessage() {
            var msg = document.getElementById("message").value;

            SendMessage(msg, username);

            document.getElementById("message").value = "";
        }
        var username = "<?php echo $_SESSION["UserName"] ?>";
        getAllMessages(username);



        setInterval(function() {
            getAllMessages(username);
        }, 3000);
    </script>

    <?php include 'footer.php'; 
    ?>


</body>

</html>