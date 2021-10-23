<html>
    <body>
        <?php
             
            $medData = json_decode(file_get_contents("../Model/medicineData.json",true),true);
            
            if(isset($_POST['Search']))
            {
                $notfound= true;
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


                        $notfound = false;

                        setcookie("found",$notfound,time()+10,"/");
                    }
                    else
                        {
                            
                            setcookie("found",$notfound,time()+10,"/");
                        }
                }
         
                setcookie("bname",$displaybrand,time()+86400,"/");
                setcookie("gname",$displaygens,time()+86400,"/");
                setcookie("compname",$displaycomp,time()+86400,"/");
                setcookie("type",$displaytype,time()+86400,"/");
                setcookie("price",$displayprice,time()+86400,"/");

                header("Location: ../View/purchase-medicine.php",true,302);
            }
            if(isset($_POST['Next']))
            {
                
                if(isset($_POST['qtn'])){$amount = $_POST['qtn'];}
                if(!empty($amount)){$price = $_COOKIE['price']*$amount;}

                if(empty($amount))
                {
                    echo "Please Enter Minimum(1pc) Quantity to proceed";
                    header("refresh:2;url=../VIew/purchase-medicine.php");
                }
                else
                {
                    setcookie("price",$price,time()+86400,"/");
                    setcookie("amount",$amount,time()+86400,"/");
    
                    header("Location: ../View/confirm-order.php",true,302);
                }

               
            }


        ?>
    </body>
</html>