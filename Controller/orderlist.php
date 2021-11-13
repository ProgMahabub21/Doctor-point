<html>

<body>
    <?php
    include 'dbconn.php';
    session_start();
    // $orderlist = json_decode(file_get_contents("../Model/orderData.json", true), true);
    $curr_user = $_SESSION['UserName'];
    $count = 0;

    // foreach ($orderlist as $x => $val) {
    //     // echo "<hr>";
    //     if ($val["Customer Name"] == $curr_user) {
    //         $array[$count] =  array("Order ID:" => $orderlist[$x]["Order ID"], "Medicine Name:" => $orderlist[$x]["Medicine Name"],"Generics Name:" => $orderlist[$x]["Generics Name"] ," Quantity:" => $orderlist[$x]["Quantity"], " Price:" => $orderlist[$x]["Price"], "Order Status:" => $orderlist[$x]["Order Status"],"Order Placement Time"=> $orderlist[$x]["Order Time"]);
    //         $count++;
    //     }
    // }
    
    //selecting the prescription history of the user
    $sql = "SELECT * FROM order_data WHERE CustomerName=?";

    if($stmt = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $curr_user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while($row = mysqli_fetch_assoc($result)){

            if($row['PaymentStatus']) {
                $status = "Paid";
            }
            $orderData[$count]['OrderID'] = $row['OrderID'];
          //  $orderData[$count]['PatientEmail'] = $row['PatientEmail'];
            $orderData[$count]['MedicineName'] = $row['MedicineName'];
            $orderData[$count]['GenericName'] = $row['GenericName'];
            $orderData[$count]['Quantity'] = $row['Quantity'];
            $orderData[$count]['Price'] = $row['Price'];
            $orderData[$count]['PayStatus'] = $status;
            $orderData[$count]['OrderTime'] = $row['OrderDate'];
            $orderData[$count]['OrderStatus'] = $row['OrderStatus'];

            $count++;
        }
    }

    mysqli_stmt_close($stmt);

    // close connection
    mysqli_close($conn);
    ?>
</body>

</html>