<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient's Account</title>
    <link rel="stylesheet" href="../View/css/pprofile.css">
    <link rel="stylesheet" href="../View/css/heading.css">
    <style>
        .mySlides {
            display: none;
        }
    </style>
</head>

<body style="text-align: center; ">

    <!-- <p style="align:left"><?php //session_start(); echo "Hello! ". $_SESSION['UserName'];
                                ?></p><p style="display: inline-block; ">Welcome Back! . Check Which doctors are available!!</p><br> -->
    <?php include "header.html"; ?>
    <?php include "navbar.php"; ?>

    <!-- <div class="container">
        <p style="position:absolute; font-size: 30px; font-weight:bold; color:red; top:180px; left:15px; ">Welcome to Doctor's Point</p>
    </div> -->

    <h2 class="h2">Doctor's Point Welcomes You with Dedicated Services </h2>

    <div class="w3-content w3-display-container">
        <img class="mySlides" src="../View/image/patient-profile.jpg" style="width:100%; height:720px; padding:5% ">
        <img class="mySlides" src="../View/image/patient-profile1.jpg" style="width:100%; height:720px; padding:5%">
        <img class="mySlides" src="../View/image/patient-profile2.jpg" style="width:100%; height:720px; padding:5%">
        <img class="mySlides" src="../View/image/patient-profile3.jpg" style="width:100%; height:720px; padding:5%">
        <img class="mySlides" src="../View/image/patient-profile4.jpg" style="width:100%; height:720px; padding:5%">

        <!-- <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> -->
    </div>

    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {
                slideIndex = 1
            }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>


    <!-- <table>
        <tr>
            <td><form action="submitFeedback.php"><input type="submit" value="Feedback"></form></td>
            <td><form action="chatWithDoc.php"><input type="submit" value="Chat Doc"></form></td>
            <td><form action="make-appointment.php"><input type="submit" value="Make Appoinment"></form></td>
            <td><form action="viewPrescription.php"><input type="submit" value="Prescription"></form></td>
            <td><form action="medicine-shop.php"><input type="submit" value="Purchase Medicine"></form></td>
            <td><form action="change-password.html"><input type="submit" value="Change Password"></form></td>
            <td><form action="viewprofile.php"><input type="submit" value="View Profile"></form> </td>
            <td><form action="../Controller/logout.php" method="post"><input type="submit" value="Log Out" name="logout"></form></td>
        </tr>
    </table> -->


    <?php include "footer.php" ?>

</body>

</html>