<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<form action="../Controller/updateprofile.php" style="display:inline-block" method="POST">
        <?php include "../Controller/patientlist.php" ?>
        <fieldset>
            <legend>Profile Details</legend>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" value="<?php echo $fName ?>" readonly><br><br>
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" value="<?php echo $lName ?>" readonly><br><br>
            <label for="age">Age :</label>
            <input type="text" name="age" id="age" value="<?php echo $age ?>"><br><br>
            <label for="gender">Gender :</label>
            <input type="text" name="gender" id="gender" value="<?php echo $gender ?>"><br><br>
            <label for="address">Present Address:</label>
            <input type="text" name="address" id="address" value="<?php echo $address ?>"><br><br>
            <label for="bgs">Blood Group:</label>
            <input type="text" name="bgs" id="bgs" value="<?php echo $bgs ?>"><br><br>
            <label for="contact">Phone:</label>
            <input type="number" name="contact" id="contact" value="<?php echo $phone ?>"><br><br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?php echo $email ?>" readonly><br><br>
        </fieldset><br>
        <input type="submit" value="Update" name="update">
        <input type="submit" value="Back" name="back">
    </form>
</body>
</html>