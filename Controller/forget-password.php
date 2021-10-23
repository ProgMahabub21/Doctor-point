<html>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){	
                $email = $_POST['email'];
                $new_password = $_POST['password'];  
            }
            if(!empty($new_password) && !empty($email))
            {
                $userData = json_decode(file_get_contents("../Model/patientData.json",true),true);
                foreach($userData as $x => $val) {
					
					
                    if($val["email"] == $email ){ //2 ta email kn
					
						$userData[$x]["password"] = $new_password;
                        echo "Password changed successfully";
					}
				  }
                $fp = fopen('../Model/patientData.json', 'w');
                fwrite($fp, json_encode($userData, JSON_PRETTY_PRINT));  
                fclose($fp);
                

            }
            else
                if(empty($email))
                    echo "email must be given";
                if(empty($new_password))
                    echo "password can't be empty";
        
        ?>
    </body>
</html>