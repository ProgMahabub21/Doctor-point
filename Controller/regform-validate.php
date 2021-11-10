<html>
<body>

    <?php
    session_start();
    include 'dbconn.php';
    if (isset($_POST['patient'])) {
        $patient_fname = $_POST['fname'];
        $patient_lname = $_POST['lname'];
        $patient_age = $_POST['age'];
        $patient_address = $_POST['address'];
        $patient_bloodGroup = $_POST['bgs'];
        $patient_phone = $_POST['contact'];
        $patient_password = $_POST['password'];
        $patient_gender = $_POST['gender'];

        if (
            empty($patient_fname) || empty($patient_lname) || empty($patient_age) || empty($patient_bloodGroup)
            || empty($patient_password) || empty($patient_phone) || empty($patient_gender)
        ) {
            if (empty($patient_fname))
                echo "first name fieldcan't be empty";
            if (empty($patient_lname))
                echo "last name field can't be empty";
            if (empty($patient_age))
                echo " age field can't be empty";
            if (empty($patient_bloodGroup) || $patient_bloodGroup == 'None')
                echo " blood group field can't be empty";
            if (empty($patient_phone))
                echo " phone no field can't be empty";
            if (empty($patient_password))
                echo " password field can't be empty";
            if (empty($patient_gender))
                echo " password field can't be empty";
        } else {
            echo "registration successful ";
            $existingData = json_decode(file_get_contents("../Model/patientData.json",true));
            $array = array('First Name' => $patient_fname, 'Last Name' => $patient_lname, 'Age(yrs)' => $patient_age, 'Gender' => $patient_gender,'Blood Group'=> $patient_bloodGroup, 'address' => $patient_address, 'phone' => $patient_phone,'email'=> $_SESSION["email"] ,'password' => $patient_password, 'User Role' => $_SESSION["userRole"]);
            array_push($existingData, $array);
            $fp = fopen('../Model/patientData.json', 'w');
            fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
            fclose($fp);

            session_destroy();
            header("refresh:3;url=../View/first-form.php");
        }
    }
    ?>
</body>
</html>