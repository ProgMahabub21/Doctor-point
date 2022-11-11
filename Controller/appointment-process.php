<html>

<body style="text-align: left;">
    <?php
    include 'dbconn.php';
    session_start();
   // $doclist = json_decode(file_get_contents("../Model/doctorData.json", true), true);
    if(isset($_POST['submit']))
    {
        $selected_email = $_POST['submit'];
    }
    // foreach($doclist as $y)
    //     if ($y['email'] == $selected_email) {
    //         $docname = $y["First Name"] . " " . $y["Last Name"];
    //         $dept = $y["department"];
    //         $fee = $y["visiting fee"];
        
    // }
    $sql = "SELECT First_Name,Last_Name,Specialization as dept FROM doctor_data WHERE Email = ?";

    //prepare statement mysql procedural
    $stmt = mysqli_prepare($conn, $sql);

    //bind parameters
    mysqli_stmt_bind_param($stmt, "s", $selected_email);

    //execute statement
    mysqli_stmt_execute($stmt);

    //bind result
    mysqli_stmt_bind_result($stmt, $firstname, $lastname, $dept);

    //fetch result
    mysqli_stmt_fetch($stmt);

    //close statement
    mysqli_stmt_close($stmt);

    

    $appid = time()*4650;
    $ispaid = false;
    
    $doctor = $firstname . " " . $lastname;
    $patient = $_SESSION['UserName'];

    //sql query to insert data into database
    $sql = "INSERT INTO appointment_data (AppointmentID, PatientName, DoctorName, Department, PaymentStatus) VALUES (?,?,?,?,?)";



    //prepare statement mysql procedural
    $stmt = mysqli_prepare($conn, $sql);

    //bind parameters
    mysqli_stmt_bind_param($stmt, "isssi", $appid, $patient , $doctor, $dept, $ispaid);

    //execute statement
    mysqli_stmt_execute($stmt);

    //check if data is inserted
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>alert('Appointment booked successfully.Redirecting you to Payment page. Please complete payment for confirmation')</script>";

        //close statement
        mysqli_stmt_close($stmt);

        //close connection
        mysqli_close($conn);

        setcookie("payid",$appid,time()+600);
        header("refresh:1;url=../View/makePayment.php");
    } else {
        echo "Appointment booking failed";
    }
            //  $existingData = json_decode(file_get_contents("../Model/appointment.json",true));
            //  $array = array("Appointment ID"=>$appid,"Patient's Name" => $_SESSION['UserName'], "Doctor's Name" => $docname, 'Department' => $dept, 'Payment Status' => $ispaid);
            //  array_push($existingData, $array);
            //  $fp = fopen('../Model/appointment.json', 'w');
            //  fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
            //  fclose($fp);
             
    ?>

</body>

</html>