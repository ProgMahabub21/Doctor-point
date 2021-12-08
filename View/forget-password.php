<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forget Password</title>
    <link rel="stylesheet" href="css/regform.css" />
    <style>
        .form-header h2 {
            font-size: 27px;
            text-align: center;
            color: #189AB4;
            padding: 20px 0;
            border-bottom: 1px solid #cccccc;
        }


        ::placeholder {
            color: #F5B2A6;
            opacity: 1;
        }

        /* link: https://www.canva.com/colors/color-palettes/summer-splash/ -- colorpalette */
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <!-- <form action="../Controller/update-password.php" method="POST" style="display: inline-block;"> -->
    <div class="signup-form" style="height: auto; width: 380px">
        <div class="form-header" style="background-color:aquamarine">
            <h2> Password Reset </h2>
        </div>

        <div class="form-body">
            <div class="form-group">
                <input type="text" class="form-input" id="email" name="email" placeholder="*Enter Your Account Email">
            </div>
            <div class="form-group">
                <span id="errmail" style="color: red; font-weight:bold; font-size:15px;"></span>
            </div>
            <br>
            <div class="form-group">
                <input type="password" class="form-input" id="password" name="password" placeholder="*Enter New Password">
            </div>
            <br>
            <div class="form-group">
                 <span id="errpass" style="color: red; font-weight:bold; font-size:15px;"></span>
            </div>
            <br>    
            <button class="btn" style="background-color:#44487c; left: 10%" onclick="validateForm()">Continue</button>
            <button class="btn" style="background-color:#34bccc; left: 30%" onclick="location.href='login-form.php' ">Cancel</button>            
        </div>

        <div class="form-footer">
            <span style="color:red;">*</span><span> required</span>
           
        
        </div>
    </div>
    <script src="Js/forgetpass.js"></script>

    <?php include 'footer.php'; ?>
</body>

</html>