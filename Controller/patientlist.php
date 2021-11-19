<html>

<body>
    <?php
    session_start();

    $server = "localhost";
    $user = "root";
    $pass = "admin2020";
    $db = "doctor_point";

    $conn = mysqli_connect($server, $user, $pass, $db);


    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $current_user = $_SESSION['Usermail'];
    //echo $current_user;

    $sql = "SELECT * FROM patient_data WHERE Email = '$current_user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) > 0)
    {
        $fName = $row["First_Name"];
            $lName = $row["Last_Name"];
            $age = $row["Age"];
            $gender = $row["Gender"];
            $address = $row["Present_Address"];
            $phone = $row["Phone"];
            $email = $row["Email"];
            $bgs = $row["BloodGroup"];
        
    }

    //close connection
    mysqli_close($conn);
    //  $userData = json_decode(file_get_contents("../Model/patientData.json", true),true);

    //  foreach($userData as $i=>$value)
    //  {
    //     $verifyName = $value["Last Name"].", ".$value["First Name"];
    //     $currName = $_SESSION['UserName']; 
    //     if($verifyName == $currName)
    //     {
    //         $fName = $value["First Name"];
    //         $lName = $value["Last Name"];
    //         $age = $value["Age(yrs)"];
    //         $gender = $value["Gender"];
    //         $address = $value["address"];
    //         $phone = $value["phone"];
    //         $email = $value["email"];
    //         $bgs = $value["Blood Group"];
    //     }
    //  }

    ?>
</body>

</html>