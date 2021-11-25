<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient's Account</title>
    <link rel="stylesheet" href="../View/css/pprofile.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        .mySlides {
            display: none;
        }
    </style>
</head>

<body>

    <!-- <p style="align:left"><?php //session_start(); echo "Hello! ". $_SESSION['UserName'];
                                ?></p><p style="display: inline-block; ">Welcome Back! . Check Which doctors are available!!</p><br> -->
    <?php include "navbar.php"; ?>

    <!-- <div class="container">
        <p style="position:absolute; font-size: 30px; font-weight:bold; color:red; top:180px; left:15px; ">Welcome to Doctor's Point</p>
    </div> -->

    <h2 class="h2" style="text-align: center;">Doctor's Point Welcomes You with Dedicated Services </h2>
<!-- 
    <div class="w3-content w3-display-container">
        <img class="mySlides" src="../View/image/pic.jpg" style="width:100%; height:720px;  ">
        <div class="w3-display-left w3-container" >
            <p style="left: 60%; top:40%; font-weight:bold; font-size:22px">Worried about the health of your delicate children?</p> <br>
            <p>Our dedicated team of pediatricians are here to understand </p> <br> 
            <p>the concerns of your dear children and prescribe the right </p><br>
            <p>treatment for them.</p><br>
        </div> 
        <img class="mySlides" src="../View/image/patient-profile1.jpg" style="width:100%; height:720px; padding:5%">
        <img class="mySlides" src="../View/image/patient-profile2.jpg" style="width:100%; height:720px; padding:5%">
        <img class="mySlides" src="../View/image/patient-profile3.jpg" style="width:100%; height:720px; padding:5%">
        <img class="mySlides" src="../View/image/patient-profile4.jpg" style="width:100%; height:720px; padding:5%">

      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> 
    </div> -->

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


    <?php include "footer.php" ?>

</body>

</html>