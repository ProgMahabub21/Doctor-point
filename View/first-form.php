<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First page of Registration Form</title>
</head>
<body style="text-align: center;"> 
    <?php  require "header.html"?>
    <br><br><br><br><br><br>
    <form action="../Controller/form-validate.php" style="display: inline-block;" method="POST" name="fstep" style=" display:inline;"><h1>Welcome To Doctor's Point</h1>
        <h2>Registration Form</h2>
        <fieldset>
            <legend>Basic Info's</legend>
            <label for="email:">Email:</label>
            <input type="email" name="email" id="email"><br><br>
            <label for="User type">User Type:</label>
            <input type="radio" name="Usertype" id="Admin" value="admin">
            <label for="Admin">Admin</label>
            <input type="radio" name="Usertype" id="Patients" value="patients">
            <label for="Patients">Patients</label>
            <input type="radio" name="Usertype" id="Doctors" value="doctors">
            <label for="Doctors">Doctors</label>
            <input type="radio" name="Usertype" id="ShopManager" value="manager">
            <label for="ShopManager">Medicine Shop Manager</label>
        </fieldset>
        <br>
        <input type="submit" value="Next" name="next">
        <br><br>
    </form>
    <form action="login-form.php">
        <p>Already have accounts?<input type="submit" value="Log in"></p>
    </form>


    <?php  include "footer.php" ?>
   
</body>
</html>