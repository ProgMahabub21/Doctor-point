<html>

<body style="text-align: left;">
    <?php
    $doclist = json_decode(file_get_contents("../Model/doctorData.json", true), true);
    if(isset($_POST['submit']))
    {
        $selected_email = $_POST['submit'];
    }
    foreach($doclist as $y)
        if ($y['email'] == $selected_email) {
            $docname = $y["First Name"] . " " . $y["Last Name"];
            $dept = $y["department"];
            $fee = $y["visiting fee"];
        
    }
    $appid = time()*4650;
    $ispaid = false;
    echo " Appointment booked.Redirecting you to Payment page. Please complete payment for confirmation";
             $existingData = json_decode(file_get_contents("../Model/appointment.json",true));
             $array = array("Appointment ID"=>$appid,"Patient's Name" => $_COOKIE['UserName'], "Doctor's Name" => $docname, 'Department' => $dept, 'Payment Status' => $ispaid);
             array_push($existingData, $array);
             $fp = fopen('../Model/appointment.json', 'w');
             fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
             fclose($fp);
             setcookie("payid",$appid,time()+600);
             header("refresh:5;url=../View/makePayment.php");
    ?>

</body>

</html>