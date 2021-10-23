<html>

<body>
    <?php

    $orderlist = json_decode(file_get_contents("../Model/orderData.json", true), true);
    $curr_user = $_COOKIE['UserName'];
    $count = 0;

    foreach ($orderlist as $x => $val) {
        // echo "<hr>";
        if ($val["Customer Name"] == $curr_user) {
            $array[$count] =  array("Order ID:" => $orderlist[$x]["Order ID"], "Medicine Name:" => $orderlist[$x]["Medicine Name"],"Generics Name:" => $orderlist[$x]["Generics Name"] ," Quantity:" => $orderlist[$x]["Quantity"], " Price:" => $orderlist[$x]["Price"], "Order Status:" => $orderlist[$x]["Order Status"],"Order Placement Time"=> $orderlist[$x]["Order Time"]);
            $count++;
        }
    }

    ?>
</body>

</html>