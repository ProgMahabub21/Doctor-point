
    <?php
    session_start();
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "doctor_point";
    
    $conn = mysqli_connect($server, $user, $pass, $db);
    if (!$conn) {
       // die("Connection failed: " . mysqli_connect_error());
       echo json_encode(array("statusCode"=>500));
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $old_password = $_POST['OldPassword'];
        $new_password = $_POST['Newpassword'];
        $retype_pass = $_POST['Repassword'];
        $curr_user = $_SESSION['Usermail'];

        if (!empty($new_password) && !empty($old_password)) {
            if ($new_password == $retype_pass) {

                $sql = "SELECT password FROM patient_data WHERE Email = '$curr_user'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if($row['password'] == $old_password){
                    $sql = "UPDATE patient_data SET password = '$new_password' WHERE Email = '$curr_user'";
                    $result = mysqli_query($conn, $sql);
                    //echo "Password updated successfully"; 
                    echo json_encode(array("statusCode"=>200));         //html sucess response
                }
                else{
                   // echo "Given Old Password is incorrect";
                   echo json_encode(array("statusCode"=>801));
                }
                // $userData = json_decode(file_get_contents("../Model/patientData.json", true), true);
                // foreach ($userData as $x => $val) {

                //     $temp_user = $val["Last Name"].", ".$val["First Name"];
                //     if ($curr_user == $temp_user ) { 
                //         $curr_pass =  $userData[$x]["password"];
                //         if($curr_pass== $old_password)
                //         {
                //             $userData[$x]["password"] = $new_password;
                //             echo "Password changed successfully";
                //         }
                //         else   
                //             echo "current password doesn't match";
                        
                mysqli_close($conn);
                header("refresh:2;url=../View/patient-profile.php");    
            
            }
                    
               
            else
            echo json_encode(array("statusCode"=>802));
               // echo "New Password & retyped password doesn't match";
        }
        else
            echo json_encode(array("statusCode"=>400));
           // echo "any field can't be empty";
    }
    ?>
