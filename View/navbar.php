<html>
    <head>
        <link rel="stylesheet" href="../View/css/navigatebar.css">
    </head>
    <body>
        
    <!--- Navigation Bar -->
   
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700">

<nav>
	<a class="logo" href="#"><i class="fas fa-stethoscope fa-2x">   Doctor's Point</i></a>
	<ul class="nav-bar">
		<li class="nav-bar_item"><a href="patient-profile.php">Home</a></li>
		<li class="nav-bar_item"><a href="submitfeedback.php">Feedback</a></li>
		
		<li class="nav-bar_item"><a href="chatWithDoc.php">ChatDoc</a></li>
		<li class="nav-bar_item"><a href="make-appointment.php">Appoinment</a></li>
		<li class="nav-bar_item"><a href="viewPrescription.php">Prescription</a></li>
		<li class="nav-bar_item"><a href="medicine-shop.php">Medicine Shop</a></li>
		<li class="nav-bar_item dropdown">
			<a href="#"><i class="far fa-user"></i><?php session_start(); echo " ".$_SESSION['UserName'];?></a>
			<ul class="project">
				<li class="drop-item"><a href="viewprofile.php">View Profile</a></li>
				<li class="drop-item"><a href="change-password.html">Change Password</a></li>
				<li class="drop-item"><a href="../Controller/logout.php?logout" >Logout</a></li>
				
			</ul>
		</li>
	</ul>
</nav>
    </body>
</html>