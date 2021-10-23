<html>
    <body>
        <?php
              session_start();
              if (isset($_POST['update'])) {
                  $patient_fname = $_POST['fname'];
                  $patient_lname = $_POST['lname'];
                  $patient_age = $_POST['age'];
                  $patient_address = $_POST['address'];
                  $patient_bloodGroup = $_POST['bgs'];
                  $patient_phone = $_POST['contact'];
                  $patient_gender = $_POST['gender'];
                  $curr_user = $_SESSION['UserName'];
          
                echo "update successful ";
                $userData = json_decode(file_get_contents("../Model/patientData.json", true), true);
                foreach ($userData as $x => $val) {

                    $temp_user = $patient_lname.", ".$patient_fname;
                    if ($curr_user == $temp_user ) { 
                        
                        $userData[$x]["Age(yrs)"] = $patient_age;
                        $userData[$x]["Blood Group"] = $patient_bloodGroup;
                        $userData[$x]["phone"] = $patient_phone;
                        $userData[$x]["address"] = $patient_address;
                        $userData[$x]["Gender"] = $patient_gender;
                        
                    }
                    
                }
                $fp = fopen('../Model/patientData.json', 'w');
                fwrite($fp, json_encode($userData, JSON_PRETTY_PRINT));
                fclose($fp);

                header("refresh:2;url=../View/patient-profile.php");
              }
              if (isset($_POST['back']))
              {
                  header("Location:../View/patient-profile.php",true,302);
              }
        ?>
    </body>
</html>