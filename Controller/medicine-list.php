
    <?php

    include 'dbconn.php';
    
    // $medData = json_decode(file_get_contents("../Model/medicineData.json",true),true);

    if(isset($_POST['Search']))
    {
        $notfound= true;
    if(isset($_POST['medbrand']))
    {
        $searchname = $_POST['medbrand'];
    }


    //sql query to get the medicine data with bind param
    $sql = "SELECT * FROM medicine_data WHERE BrandName = ? OR GenericName = ?";

    //prepare the sql query procedural method
    $stmt = mysqli_prepare($conn,$sql);

    //bind the param
    mysqli_stmt_bind_param($stmt,"ss",$searchname,$searchname);

    //execute the query
    mysqli_stmt_execute($stmt);

    //get the result
    $result = mysqli_stmt_get_result($stmt);

    //check if the result is not empty
    if(mysqli_num_rows($result) > 0)
    {
        $notfound = false;
        //fetch the result
        while($row = mysqli_fetch_assoc($result))
        {
            $displaybrand = $row['BrandName'];
            $displaygens = $row['GenericName'];
            $displaycomp = $row['CompanyName'];
            $displayprice = $row['Price(TK)'];
            $displaytype = $row['MedType'];

        }
        setcookie("found",$notfound,time()+10,"/");
    }
    
    // foreach($medData as $key=>$value)
    // {
    // if($value["brandName"] == $searchname || $value["genericsName"]== $searchname)
    // {
    // $displaybrand = $value["brandName"];
    // $displaygens = $value["genericsName"];
    // $displaycomp = $value["manufactureCompany"];
    // $displaytype = $value["medicinetype"];
    // $displayprice = $value["price"];


    // $notfound = false;

    else
    {
        setcookie("found",$notfound,time()+10,"/");
    }

    setcookie("bname",$displaybrand,time()+86400,"/");
    setcookie("gname",$displaygens,time()+86400,"/");
    setcookie("compname",$displaycomp,time()+86400,"/");
    setcookie("type",$displaytype,time()+86400,"/");
    setcookie("medprice",$displayprice,time()+86400,"/");

    header("Location: ../View/purchase-medicine.php",true,302);
    }
    if(isset($_POST['Next']))
    {

    if(isset($_POST['qtn'])){$amount = $_POST['qtn'];}
    if(!empty($amount)){$price = $_COOKIE['medprice']*$amount;}

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