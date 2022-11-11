<html>
    <body>
        <?php
            session_start();
            include 'dbconn.php';
            if(isset($_POST['confirm']))
            {
                $cardname = $_POST['cardowner'];
                $cardno = $_POST['cardno'];
                $expiredate = $_POST['expiry'];
                $cardcvv = $_POST['cardcvv'];
                $orderID = time()*365;
                $medicineName = $_COOKIE['bname'];
                $genename = $_COOKIE['gname'];
                $username = $_SESSION['UserName'];
                $quantity = $_COOKIE['amount'];
                $orderPrice = $_COOKIE['price'];
                $orderStatus = "Pending";

            }
            $ispaid = true;
            if(empty($cardname) || empty($cardno) || empty($cardcvv) || empty($expiredate))
            {
                $ispaid = false;
            }
            if($ispaid)
            {
                echo "Your Order id =". $orderID."<br>";
                echo "Payment Successful. Order booked";
                $time = date("Y-m-d") ." ".date("h:i:sa");
                $orderData = json_decode(file_get_contents("../Model/orderData.json",true));
                // sql to insert data with bind param
                $sql = "INSERT INTO order_data (OrderID,CustomerName,MedicineName,GenericName,Quantity,Price,PaymentStatus,OrderDate,OrderStatus) VALUES (?,?,?,?,?,?,?,?,?)";
                
                //prepare statement with mysqli procedural
                $stmt = mysqli_prepare($conn,$sql);
                //bind param with statement
                mysqli_stmt_bind_param($stmt,"isssiisss",$orderID,$username,$medicineName,$genename,$quantity,$orderPrice,$ispaid,$time,$orderStatus);

                //execute statement
                mysqli_stmt_execute($stmt);

                //close statement
                mysqli_stmt_close($stmt);

                //close connection
                mysqli_close($conn);
   
                header("refresh:5;url=../View/patient-profile.php");
                
            }
            else
                {
                    echo "<script>alert('Payment denied. Order cancelled')</script>";
                    header("refresh:1;url=../View/patient-profile.php");

                }
        
        
        /*              $array = array("Order ID"=>$orderID,"Customer Name" => $username, "Medicine Name" => $medicineName, "Generics Name"=> $genename,'Quantity' => $quantity, 'Price'=> $orderPrice,'Payment Status' => $ispaid,'Order Time'=> $time,'Order Status'=> $orderStatus );
                array_push($orderData, $array);
                $fp = fopen('../Model/orderData.json', 'w');
                fwrite($fp, json_encode($orderData, JSON_PRETTY_PRINT));  
                fclose($fp); */
        
        ?>
    </body>
</html>

