<html>
    <body>
    <?php 
		
		session_start();

		//db connect using mysqLi procedural
		$server = "localhost";
		$user = "root";
		$pass = "admin2020";
		$db = "doctor_point";

		$conn = mysqli_connect($server, $user, $pass, $db);

		if ($_SERVER["REQUEST_METHOD"] == "POST"){	
			$email = $_POST['email'];
			$password = $_POST['password'];  
		}
		$is_validate = true;
		$loggedin = false;	

		function validate()
		{
			global $is_validate;
            if(empty($email))
				$is_validate = false;
			if(empty($password))
				$is_validate = false;	
			
		}
		validate();
	
		{

			    //connection check
				if($conn)
				{
					//echo "Connection Successful";
					//sql query
					$sql = "SELECT * FROM patient_data WHERE email = '$email' AND password = '$password'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					if(mysqli_num_rows($result) > 0)
					{
						$loggedin = true;
						$_SESSION['login'] = $loggedin;
						$_SESSION['UserName'] = $row['Last_Name'].",".$row['First_Name'];
						$_SESSION['Usermail'] = $email;
						setcookie("bname","",time()+86400,"/");
        				setcookie("gname","",time()+86400,"/");
        				setcookie("compname","",time()+86400,"/");
        				setcookie("type","",time()+86400,"/");
        				setcookie("price","",time()+86400,"/");
					
						
					}
					else
					{
						$loggedin = false;
						$_SESSION['Login'] = $loggedin;
						
					}

				}
				else
				{
					echo "Can't connect with server";
				}

                // $string = file_get_contents("../Model/patientData.json");
                // $json_a = json_decode($string, true);
				// $loggedin = false;
				// foreach($json_a as $x => $val) {
					
				// 	if($val["email"] == $email && $val["password"] == $password){ 
					
				// 		$loggedin = true;
				// 		$useremail = $val['email'];
				// 		//setcookie("Usermail",$useremail,time()+86400,"/"); 
				// 		$username = $val["Last Name"].", ".$val["First Name"];
				// 	//	setcookie("UserName",$username,time()+86400,"/");
				// 		$_SESSION["UserName"]=$username;
				// 		$_SESSION["Usermail"]=$useremail;

				// 		setcookie("bname","",time()+86400,"/");
        		// 		setcookie("gname","",time()+86400,"/");
        		// 		setcookie("compname","",time()+86400,"/");
        		// 		setcookie("type","",time()+86400,"/");
        		// 		setcookie("price","",time()+86400,"/");
				// 		break;
				// 	}
				//   }


			
              if($loggedin){
				echo "Login Successful<br>";
				mysqli_close($conn);
				header("refresh:2;url= ../View/patient-profile.php");
                
                }else{

					echo "Invalid Email or Password\n";
					echo "login failed";
				}
		}
		
	?>
    </body>
</html>