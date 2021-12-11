
    <?php
    session_start();
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "doctor_point";

    $conn = mysqli_connect($server, $user, $pass, $db);


    // Check connection
    if (!$conn) {
        // die("Connection failed: " . mysqli_connect_error());
        echo json_encode(array('statusCode'=>500));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $patient_age = $_POST['age'];
        $patient_address = $_POST['address'];
        $patient_bloodGroup = $_POST['bgs'];
        $patient_phone = $_POST['contact'];
        $patient_gender = $_POST['gender'];
        $curr_user = $_SESSION['Usermail'];

        

        if($conn)
        {
            //sql insert query
            // $sql = "INSERT INTO patient_data(Age,Present_Address,Phone,Gender,Blood Group) 
            // values($patient_age,$patient_address,$patient_phone,$patient_gender,$patient_bloodGroup) WHERE Email = $curr_user";
           // echo $curr_user;
           //echo $patient_bloodGroup."++".$patient_age."++". $patient_gender."++". $patient_phone;


           //sql update query with bind param


            $sql = "UPDATE patient_data SET Age='$patient_age',Present_Address='$patient_address',Phone='$patient_phone',Gender='$patient_gender',
            BloodGroup='$patient_bloodGroup' WHERE Email= ?";

            //prepare statement
            if ($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $curr_user);
            }
            if (mysqli_stmt_execute($stmt))
            {
                //check if data is inserted
                if (mysqli_affected_rows($conn) > 0) {
                    echo json_encode(array('statusCode'=>200));
                } else {
                    echo json_encode(array('statusCode'=>400));
                }
            }
        }
        // echo "update successful ";
        // $userData = json_decode(file_get_contents("../Model/patientData.json", true), true);
        // foreach ($userData as $x => $val) {

        //     $temp_user = $patient_lname.", ".$patient_fname;
        //     if ($curr_user == $temp_user ) { 

        //         $userData[$x]["Age(yrs)"] = $patient_age;
        //         $userData[$x]["Blood Group"] = $patient_bloodGroup;
        //         $userData[$x]["phone"] = $patient_phone;
        //         $userData[$x]["address"] = $patient_address;
        //         $userData[$x]["Gender"] = $patient_gender;

        //     }

        // }
        // $fp = fopen('../Model/patientData.json', 'w');
        // fwrite($fp, json_encode($userData, JSON_PRETTY_PRINT));
        // fclose($fp);
        mysqli_close($conn);
        header("refresh:2;url=../View/patient-profile.php");
        //database connection close
       
    }
    if (isset($_POST['back'])) {
        header("Location:../View/patient-profile.php", true, 302);
    }
    ?>
