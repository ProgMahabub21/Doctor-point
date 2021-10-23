<html>
    <body>
        <?php
             
            $medData = json_decode(file_get_contents("../Model/medicineData.json",true),true);
            // setcookie("bname",$displaybrand,time()-86400);
            // setcookie("gname",$displaygens,time()-86400);
            // setcookie("compname",$displaycomp,time()-86400);
            // setcookie("type",$displaytype,time()-86400);
            // setcookie("price",$displayprice,time()-86400);
            
            if(isset($_POST['Search']))
            {
                if(isset($_POST['medbrand']))
                {
                    $searchname = $_POST['medbrand'];
                }
                
                foreach($medData as $key=>$value)
                {
                    if($value["brandName"] == $searchname || $value["genericsName"]== $searchname)
                    {
                        $displaybrand = $value["brandName"];
                        $displaygens = $value["genericsName"];
                        $displaycomp = $value["manufactureCompany"];
                        $displaytype = $value["medicinetype"];
                        $displayprice = $value["price"];
                    }
                }
                // echo empty($searchname);
                // echo $_POST['Search'];
                // echo $_POST['medbrand'];
                // echo $displaybrand. " ". $displaycomp. " ".$displaygens." ". $displaytype. " ". $displayprice;
                setcookie("bname",$displaybrand,time()+86400,"/");
                setcookie("gname",$displaygens,time()+86400,"/");
                setcookie("compname",$displaycomp,time()+86400,"/");
                setcookie("type",$displaytype,time()+86400,"/");
                setcookie("price",$displayprice,time()+86400,"/");

                header("Location: ../View/purchase-medicine.php",true,302);
            }
            if(isset($_POST['Next']))
            {
                
                $amount = $_POST['qtn'];
                $price = $_COOKIE['price']*$amount;

                setcookie("price",$price,time()+86400,"/");
                setcookie("amount",$amount,time()+86400,"/");

                header("Location: ../View/confirm-order.php",true,302);
            }


        ?>
    </body>
</html>