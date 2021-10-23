<html>
    <body>
        <?php
            
            if(isset($_POST['confirm']))
            {
                $cardname = $_POST['cardowner'];
                $cardno = $_POST['cardno'];
                $expiredate = $_POST['expiry'];
                $cardcvv = $_POST['cardcvv'];
            }

            $ispaid = true;
            if(empty($cardname) || empty($cardno) || empty($cardcvv) || empty($expiredate))
            {
                $ispaid = false;
            }

            if($ispaid)
            {
                $paymentid = $_COOKIE['payid'];
                echo "Your Appointment id =". $paymentid."<br>";
                echo "Payment Successful. Appointment booked";
                $existingData = json_decode(file_get_contents("../Model/appointment.json",true),true);
                foreach($existingData as $ed=>$val)
                {
                    if($val['Appointment ID'] == $paymentid )
                    {
                        $existingData[$ed]['Payment Status'] = $ispaid;
                    } 
                }
                setcookie("payid","",time()-86400);
                $fp = fopen('../Model/appointment.json', 'w');
                fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
                fclose($fp);

                header("refresh:5;url=../View/patient-profile.php");
                
            }
            else
                {
                    echo "Payment denied. Appointment cancelled";

                }
        
        
        ?>

    </body>
</html>