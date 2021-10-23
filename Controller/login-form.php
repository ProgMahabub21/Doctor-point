<html>
    <body>
    <?php 
		
		session_start();
		if ($_SERVER["REQUEST_METHOD"] == "POST"){	
			$email = $_POST['email'];
			$password = $_POST['password'];  
		}
		$is_validate = true;	

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


                $string = file_get_contents("../Model/patientData.json");
                $json_a = json_decode($string, true);
				$loggedin = false;
				foreach($json_a as $x => $val) {
					
					if($val["email"] == $email && $val["password"] == $password){ 
					
						$loggedin = true;
						$useremail = $val['email'];
						//setcookie("Usermail",$useremail,time()+86400,"/"); 
						$username = $val["Last Name"].", ".$val["First Name"];
					//	setcookie("UserName",$username,time()+86400,"/");
						$_SESSION["UserName"]=$username;
						$_SESSION["Usermail"]=$useremail;
						break;
					}
				  }


			
              if($loggedin){
				echo "Login Successful<br>";
				header("refresh:2;url= ../View/patient-profile.php");
                
                }else{

					echo "login failed";
				}
			}
		
	?>
    </body>
</html>