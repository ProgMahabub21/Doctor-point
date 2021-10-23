<html>
    <body>
        <?php
            session_start();
                 $userData = json_decode(file_get_contents("../Model/patientData.json", true),true);
                 
                 foreach($userData as $i=>$value)
                 {
                    $verifyName = $value["Last Name"].", ".$value["First Name"];
                    $currName = $_SESSION['UserName']; 
                    if($verifyName == $currName)
                    {
                        $fName = $value["First Name"];
                        $lName = $value["Last Name"];
                        $age = $value["Age(yrs)"];
                        $gender = $value["Gender"];
                        $address = $value["address"];
                        $phone = $value["phone"];
                        $email = $value["email"];
                        $bgs = $value["Blood Group"];
                    }
                 }
        
        ?>
    </body>
</html>