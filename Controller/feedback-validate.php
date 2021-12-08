
        <?php
        //session_start();
       // include 'dbconn.php';

        echo "json_encoode(array('status'=>'success'))";
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $docname = $_POST['docname'];
        //     $msg = $_POST['message'];
        //     $department = $_POST['dept'];
        // }
        // $is_validate = true;
        // if (empty($msg)) {
        //     echo json_encode(array('statusCode' => 400));
        // } else {
        //     $fid = time() * 5;
        //     //sql to insert data into database with prepared statement
        //     $sql = "INSERT INTO feedback_record (FeedbackID,PatientEmail,DoctorName,Department,Message) VALUES (?,?,?,?,?)";

        //     if ($stmt = mysqli_prepare($conn, $sql)) {
        //         // Bind variables to the prepared statement as parameters
        //         mysqli_stmt_bind_param($stmt, "issss", $param_fid, $param_email, $param_docname, $param_dept, $param_msg);

        //         // Set parameters
        //         $param_fid = $fid;
        //         $param_email = $_SESSION['Usermail'];
        //         $param_docname = $docname;
        //         $param_dept = $department;
        //         $param_msg = $msg;

        //         // Attempt to execute the prepared statement
        //         if (mysqli_stmt_execute($stmt)) {
        //             //feedback success msg
        //             echo json_encode(array('statusCode' => 200));

        //             //statement close
        //             mysqli_stmt_close($stmt);

        //             //connection close
        //             mysqli_close($conn);

        //             // Redirect to profile page
        //             // header("refresh:2;url=../View/patient-profile.php");
        //         } else {
        //             echo json_encode(array('statusCode' => 500));
        //         }
        //     }
        //     // $fetchData = json_decode(file_get_contents("../Model/feedbackData.json",true));
        //     // $array = array("Patient's Name" => $_SESSION['UserName'], "Doctor's Name" => $docname, 'Feedback Message' => $msg);
        //     // array_push($fetchData, $array);
        //     // $fp = fopen('../Model/feedbackData.json', 'w');
        //     // fwrite($fp, json_encode($fetchData, JSON_PRETTY_PRINT));  
        //     // fclose($fp);


        // }


        ?>
 