<html>
    <body>
        <?php
            $server = "localhost";
            $user = "root";
            $pass = "admin2020";
            $db = "doctor_point";
    
            $conn = mysqli_connect($server, $user, $pass, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST"){	
                $email = $_POST['email'];
                $new_password = $_POST['password'];  
            }
            if(!empty($new_password) && !empty($email))
            {
                
                $sql = "SELECT * FROM patient_data WHERE email = '$email' ";

                $result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				if(mysqli_num_rows($result) > 0)
				{
                    $sql = "UPDATE patient_data SET password = '$new_password' WHERE email = '$email' ";
                    $result = mysqli_query($conn, $sql);
                    if($result)
                    {
                        echo "Password changed successfully";
                    }
                    else
                    {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
                // $userData = json_decode(file_get_contents("../Model/patientData.json",true),true);
                // foreach($userData as $x => $val) {
					
					
                //     if($val["email"] == $email ){ //2 ta email kn
					
				// 		$userData[$x]["password"] = $new_password;
                //         echo "Password changed successfully";
				// 	}
				//   }
                // $fp = fopen('../Model/patientData.json', 'w');
                // fwrite($fp, json_encode($userData, JSON_PRETTY_PRINT));  
                // fclose($fp);
                mysqli_close($conn);
                header("refresh:2;url=../View/login-form.php");
            }
            else
                if(empty($email))
                    echo "email must be given";
                if(empty($new_password))
                    echo "password can't be empty";
        
        ?>
    </body>
</html>