<html>
    <body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $old_password = $_POST['OldPassword'];
        $new_password = $_POST['Newpassword'];
        $retype_pass = $_POST['Repassword'];
        $curr_user = $_COOKIE['UserName'];

        if (!empty($new_password) && !empty($old_password)) {
            if ($new_password == $retype_pass) {
                $userData = json_decode(file_get_contents("../Model/patientData.json", true), true);
                foreach ($userData as $x => $val) {

                    $temp_user = $val["Last Name"].", ".$val["First Name"];
                    if ($curr_user == $temp_user ) { 
                        $curr_pass =  $userData[$x]["password"];
                        if($curr_pass== $old_password)
                        {
                            $userData[$x]["password"] = $new_password;
                            echo "Password changed successfully";
                        }
                        else   
                            echo "current password doesn't match";
                        
                    }
                    
                }
                $fp = fopen('../Model/patientData.json', 'w');
                fwrite($fp, json_encode($userData, JSON_PRETTY_PRINT));
                fclose($fp);
            }
            else
                echo "New Password & retyped password doesn't match";
        }
        else
            echo "any field can't be empty";
    }
    ?>
    </body>
</html>