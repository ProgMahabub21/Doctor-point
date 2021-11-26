<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
  />
  <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <form action="../Controller/update-password.php" method="POST" style="display: inline-block;">
        <fieldset>
            <legend>Password Change:</legend>

            <label for="OldPassword">Current Password:</label><br>
            <input type="password" id="OldPassword" name="OldPassword">

            </input><br>


            <br> <label for="Newpassword">New password:</label><br>
            <input type="password" id="Newpassword" name="Newpassword">

            </input><br>
            <br> <label for="Repassword">Retype New password:</label><br>
            <input type="password" id="Repassword" name="Repassword">

            </input><br>
        </fieldset>
        <br>
        <input type="submit" value="Confirm">
    </form>
    <br>

    
</body>

</html>