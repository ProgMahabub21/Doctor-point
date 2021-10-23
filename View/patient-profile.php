<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient's Account</title>
</head>
<body style="text-align: center;">
    <p style="align:left"><?php echo "Hello! ". $_COOKIE['UserName'];?></p><p style="display: inline-block; ">Welcome Back! . Check Which doctors are available!!</p><br>
    <table>
        <tr>
            <td><form action="submitFeedback.php"><input type="submit" value="Feedback"></form></td>
            <td><form action="chatWithDoc.php"><input type="submit" value="Chat Doc"></form></td>
            <td><form action="make-appointment.php"><input type="submit" value="Make Appoinment"></form></td>
            <td><form action="viewPrescription.php"><input type="submit" value="Prescription"></form></td>
            <td><form action="medicine-shop.php"><input type="submit" value="Purchase Medicine"></form></td>
            <td><form action="change-password.html"><input type="submit" value="Change Password"></form></td>
            <td><form action="../Controller/logout.php" method="post"><input type="submit" value="Log Out" name="logout"></form></td>
        </tr>
    </table>


</body>
</html>