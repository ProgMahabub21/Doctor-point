<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Medicine</title>
</head>
<body>
    <?php //include "../Controller/medicine-list.php"?>
    <form action="../Controller/medicine-list.php"  method="post">
        <fieldset>
            <legend><h3>Search Medicine</h3></legend>
            <label for="medbd">Search by Brand or Generics Name</label><br><br>
            <input type="text" name="medbrand" id="medbrand"><br>
            <br><br>
            <input type="submit" name="Search"  value="Search">
        </fieldset>
    </form>
    <hr><hr><hr>
    <form action="../Controller/medicine-list.php"  method="post">
   
        <fieldset>
            <legend><h3>Search Results</h3></legend>
            <label for="meddetails">Medicine Details</label><br><br>
            <?php if(isset($_COOKIE['found'])){if($_COOKIE['found']) echo "<h3>Medicine Name not found</h3> ";}?>
            <label for="medName(Brand):">Brand Name:</label>
            <input type="text" name="medName" id="medName" value="<?php if(isset($_COOKIE['bname'])){echo $_COOKIE['bname'];}else{echo" ";}?>"><br>
            <label for="medName(gen)">Generics Name:</label>
            <input type="text" name="genName" id="genName" value="<?php if(isset($_COOKIE['gname'])){echo $_COOKIE['gname'];}else{echo" ";}  ?>"><br>
            <label for="pharmaname">Manufacture Company:</label>
            <input type="text" name="comName" id="comName" value="<?php if(isset($_COOKIE['compname'])){echo $_COOKIE['compname'];}else{echo" ";} ?>"><br>
            <label for="medtype">Medicine type:</label>
            <input type="text" name="medtype" id="medtype" value="<?php if(isset($_COOKIE['type'])){echo $_COOKIE['type'];}else{echo" ";} ?>"><br>
            <label for="price">Price(1 Pcs)</label>
            <input type="text" name="medprice" id="medprice" value="<?php if(isset($_COOKIE['price'])){echo $_COOKIE['price'];}else{echo" ";} ?>"><br>
            <label for="amount">Enter order Quantity (PCs)</label>
            <input type="text" name="qtn" id="qtn"><br>

            <br><br>
            <input type="submit" value="Confirm" name="Next">
            
        </fieldset>
    <br><br>
    
    </form>

    <form action="patient-profile.php"><input type="submit" value="Back"></form>
</body>
</html>