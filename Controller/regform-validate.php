
    <?php
    session_start();
    require 'dbconn.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $patient_fname = $_POST['fname'];
        $patient_lname = $_POST['lname'];
        $patient_age = $_POST['age'];
        $patient_address = $_POST['address'];
        $patient_bloodGroup = $_POST['bgs'];
        $patient_phone = $_POST['contact'];
        $patient_password = $_POST['password'];
        $patient_gender = $_POST['gender'];
      //   $patient_email = $_SESSION['email'];
        $patient_email = $_POST['email'];


       // echo $patient_fname. "// ". $patient_lname. " //" .$patient_age." //". $patient_address ." //". $patient_bloodGroup." //". $patient_phone." //". $patient_password." //". $patient_gender."//".$patient_email; 

        if (
            empty($patient_fname) || empty($patient_lname) || empty($patient_age) || empty($patient_bloodGroup)
            || empty($patient_password) || empty($patient_phone) || empty($patient_gender)
        ) {
            // if (empty($patient_fname))
            //     // echo "first name fieldcan't be empty";
               
            // if (empty($patient_lname))
            //     // echo "last name field can't be empty";
            // if (empty($patient_age))
            //     // echo " age field can't be empty";
            // if (empty($patient_bloodGroup) || $patient_bloodGroup == 'None')
            //     // echo " blood group field can't be empty";
            // if (empty($patient_phone))
            //     // echo " phone no field can't be empty";
            // if (empty($patient_password))
            //     // echo " password field can't be empty";
            // if (empty($patient_gender))
            //     // echo " password field can't be empty";
            echo json_encode(array('statusCode' => 400));
            header("refresh:10;url=../View/patient-form.php");

        } else {
            //sql to select query with bind param
            $sql1= "SELECT Email FROM patient_data where Email=?";

            //prepare statement with mysqli procedural
            $stmt1 = mysqli_prepare($conn, $sql1);

            //bind param
            mysqli_stmt_bind_param($stmt1, "s", $patient_email);

            //execute query
            mysqli_stmt_execute($stmt1);

            //get result
            $result1 = mysqli_stmt_get_result($stmt1);

            //check if email already exists
            if (mysqli_num_rows($result1) > 0) {
                echo json_encode(array('statusCode' => 803));
                header("refresh:10;url=../View/patient-form.php");
            } 
            if($conn)
            {
                //sql insert query with prepare statement with bind params
                $sql = "INSERT INTO patient_data(First_Name,Last_Name,Age,Gender,Present_Address,Phone,Email,password,BloodGroup) 
                values(?,?,?,?,?,?,?,?,?)";

                if($stmt = mysqli_prepare($conn, $sql)){
                    mysqli_stmt_bind_param($stmt, "ssissssss", $patient_fname,$patient_lname,$patient_age,$patient_gender,$patient_address,
                    $patient_phone,$patient_email,$patient_password,$patient_bloodGroup);

                }

                // $sql = "INSERT INTO patient_data values('$patient_fname','$patient_lname','$patient_age','$patient_gender','$patient_address',
                // '$patient_phone','$patient_email','$patient_password','$patient_bloodGroup')";
                // $sql = "INSERT INTO patient_data values('$patient_fname','$patient_lname','$patient_age','$patient_gender','$patient_address',
                // '$patient_phone','$patient_email','$patient_password','$patient_bloodGroup'";

                //check successful insert 
                //$result = mysqli_query($conn, $sql);
                if(mysqli_stmt_execute($stmt)){
                    echo json_encode(array("statusCode"=>200));
                    // echo "registration successful ";
                    session_destroy();
                    mysqli_stmt_close($stmt);
                    //close connection
                    mysqli_close($conn);
                    header("refresh:3;url=../View/login-form.php");
                } else {
                    echo json_encode(array("statusCode"=>401));
                   // echo "error";
                    //close connection
                    mysqli_close($conn);
                    header("refresh:10;url=../View/patient-form.php");
                }

            }
            else
            {
                // echo "connection failed";
                echo json_encode(array("statusCode"=>500));

            }
    
            // $existingData = json_decode(file_get_contents("../Model/patientData.json",true));
            // $array = array('First Name' => $patient_fname, 'Last Name' => $patient_lname, 'Age(yrs)' => $patient_age, 'Gender' => $patient_gender,'Blood Group'=> $patient_bloodGroup, 'address' => $patient_address, 'phone' => $patient_phone,'email'=> $_SESSION["email"] ,'password' => $patient_password, 'User Role' => $_SESSION["userRole"]);
            // array_push($existingData, $array);
            // $fp = fopen('../Model/patientData.json', 'w');
            // fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
            // fclose($fp)           
            
        }
    }
    ?>
