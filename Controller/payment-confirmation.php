<html>
    <body>
        <?php
            include 'dbconn.php';

            if(isset($_POST['confirm']))
            {
                $cardname = $_POST['cardowner'];
                $cardno = $_POST['cardno'];
                $expiredate = $_POST['expiry'];
                $cardcvv = $_POST['cardcvv'];
            }

            $ispaid = true;
            $paymentid = $_COOKIE['payid'];
            if(empty($cardname) || empty($cardno) || empty($cardcvv) || empty($expiredate))
            {
                $ispaid = false;
            }

            if($ispaid)
            {
               

                //sql to update query to update payment status with prepared statement and bind parameters with mysqli_stmt_bind_param
                $sql = "UPDATE appointment_data SET PaymentStatus = ? WHERE AppointmentID = ?";

                //prepare sql statement
                $stmt = mysqli_prepare($conn, $sql);

                //bind parameters
                mysqli_stmt_bind_param($stmt, "si", $ispaid, $paymentid);

                //execute sql statement
                mysqli_stmt_execute($stmt);

                //check if sql statement executed successfully
                if(mysqli_stmt_affected_rows($stmt) > 0)
                {
                   // echo "Payment Successful.Appointment booked <br>";
                    $alert ="Your Appointment id =". $paymentid ." use the id for chat with the doctor";
                    echo "<script>alert('$alert');</script>";
                }

                //close sql statement
                mysqli_stmt_close($stmt);

                //close connection
                mysqli_close($conn);

                // $existingData = json_decode(file_get_contents("../Model/appointment.json",true),true);
                // foreach($existingData as $ed=>$val)
                // {
                //     if($val['Appointment ID'] == $paymentid )
                //     {
                //         $existingData[$ed]['Payment Status'] = $ispaid;
                //     } 
                // }
                setcookie("payid","",time()-86400);
                // $fp = fopen('../Model/appointment.json', 'w');
                // fwrite($fp, json_encode($existingData, JSON_PRETTY_PRINT));  
                // fclose($fp);
                    //redirecting to patient profile page
               
                
            }
            else
                {
                    //sql to delete row with prepared statement and bind parameters with mysqli_stmt_bind_param to prevent sql injection
                    $sql = "DELETE FROM appointment_data WHERE AppointmentID = ?";

                    //prepare sql statement
                    $stmt = mysqli_prepare($conn, $sql);

                    //bind parameters
                    mysqli_stmt_bind_param($stmt, "i", $paymentid);

                    //execute sql statement
                    mysqli_stmt_execute($stmt);

                    //check if sql statement executed successfully
                    if(mysqli_stmt_affected_rows($stmt) > 0)
                    {
                        echo "Payment Failed.Appointment Cancelled.Please Try again later";
                    }

                    //close sql statement
                    mysqli_stmt_close($stmt);

                    //close connection
                    mysqli_close($conn);


                    setcookie("payid","",time()-86400);

                }
            
            header("refresh:1;url=../View/patient-profile.php");
        
        ?>

    </body>
</html>