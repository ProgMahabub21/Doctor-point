<html>
    <body>

        <?php
            include 'dbconn.php';
            session_start();
            
            // $prescriptionData = json_decode(file_get_contents("../Model/prescriptionData.json",true),true);
            $curr_mail =$_SESSION['Usermail'];
            $count=0;

            //selecting the prescription history of the user
            $sql = "SELECT * FROM prescription_data WHERE PatientEmail=?";

            if($stmt = mysqli_prepare($conn, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $curr_mail);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                //check if the user has any prescription history


               if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
           
                    $prescriptionData[$count]['PrescriptionID'] = $row['PrescriptionID'];
                  //  $prescriptionData[$count]['PatientEmail'] = $row['PatientEmail'];
                    $prescriptionData[$count]['DoctorName'] = $row['DoctorName'];
                    $prescriptionData[$count]['Diagnosis'] = $row['Diagnosis'];
                    $prescriptionData[$count]['Prescription'] = $row['Instruction'];
                    $prescriptionData[$count]['Date'] = $row['IssueTime'];

                    $count++;
                }
            }
           
            }
            mysqli_stmt_close($stmt);

            // close connection
            mysqli_close($conn);

           
            
        ?>
    </body>

</html>

