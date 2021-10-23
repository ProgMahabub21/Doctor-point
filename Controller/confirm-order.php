<html>
    <body>
        <?php
            if(isset($_POST['confirm']))
            {
                $cardname = $_POST['cardowner'];
                $cardno = $_POST['cardno'];
                $expiredate = $_POST['expiry'];
                $cardcvv = $_POST['cardcvv'];
                $orderID = time()*365;
                $medicineName = $_COOKIE['bname'];
                $genename = $_COOKIE['gname'];
                $username = $_COOKIE['UserName'];
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
                $array = array("Order ID"=>$orderID,"Customer Name" => $username, "Medicine Name" => $medicineName, "Generics Name"=> $genename,'Quantity' => $quantity, 'Price'=> $orderPrice,'Payment Status' => $ispaid,'Order Time'=> $time,'Order Status'=> $orderStatus );
                array_push($orderData, $array);
                $fp = fopen('../Model/orderData.json', 'w');
                fwrite($fp, json_encode($orderData, JSON_PRETTY_PRINT));  
                fclose($fp);
                header("refresh:5;url=../View/patient-profile.php");
                
            }
            else
                {
                    echo "Payment denied. Order cancelled";

                }
        
        
        
        
        ?>
    </body>
</html>