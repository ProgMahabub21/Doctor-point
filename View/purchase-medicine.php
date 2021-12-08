<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Medicine</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        body {
            /* background:linear-gradient(to right, #78a7ba 0%, #385D6C 50%, #78a7ba 99%); */
            background-color: #a4f0f9;
        }
        .search-form {
            font-family: "Roboto", sans-serif;
            width: 90%;
            margin: 30px auto;
            background: linear-gradient(to right, #ffffff 0%, #fafafa 50%, #ffffff 99%);
            border-radius: 10px;
        }

        .form-body {
            padding: 10px 40px;
            color: #6c766c;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-body .label-title {
            color: #1BBA93;
            font-size: 17px;
            font-weight: bold;
        }

        .form-body .span-text {
            color: rgba(243, 13, 13, 0.829);
            font-size: 15px;
            font-weight: bold;
        }

        .form-body .form-input {
            font-size: 17px;
            box-sizing: border-box;
            width: 30%;
            height: 34px;
            padding-left: 10px;
            padding-right: 10px;
            color: #333333;
            text-align: left;
            border: 1px solid #d6d6d6;
            border-radius: 4px;
            background: white;
            outline: none;
        }

        .form-header h2 {
            font-size: 15px;
            text-align: left;
            color: #666;
            padding: 20px 0;
            border-bottom: 1px solid #cccccc;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1BBA93;
            font-size: 17px;
            border: none;
            border-radius: 5px;
            color: #bcf5e7;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #169c7b;
            color: white;
        }

        .horizontal-group .left {
            float: left;
            width: 49%;
        }
    </style>
</head>

<body>
    <?php include "../Controller/medicine-list.php"
    ?>
    <?php include "navbar.php"; ?>
    <br><br>
    <form action="../Controller/medicine-list.php" method="post" class="search-form">
        <div class="form-body">
         
                <legend>
                    <h2>Search Medicine</h2><br>
                </legend>
                <div class="form-group">

                    <label for="medbd" class="label-title">Search by Brand or Generics Name</label><br><br>
                    <input type="text" class="form-input" name="medbrand" id="medbrand" onkeyup="showResult(this.value)" autocomplete="off" placeholder="Search medicine..."> <br>
                    <div id="livesearch"></div><br>

                    <br>
                </div><br>
                <input type="submit" class="btn" name="Search" value="Search">
           
        </div>
    </form>
    <hr>
    <hr>
    <hr>
    <form action="../Controller/medicine-list.php" method="post" class="search-form">
        <div class="form-body">
           
                <legend>
                    <h2>Search Results</h2> <br>
                </legend>
                <label for="meddetails" class="label-title">Medicine Details</label><br><br>
                <?php if (isset($_COOKIE['found'])) {
                    if ($_COOKIE['found']) echo "<h3>Medicine Name not found</h3> ";
                } ?> <br>
                <div class="form-group">
                    <label for="medName(Brand):" class="label-title">Brand Name:</label>
                    <input type="text" class="form-input" name="medName" id="medName" value="<?php if (isset($_COOKIE['bname'])) {
                                                                                                    echo $_COOKIE['bname'];
                                                                                                } else {
                                                                                                    echo " ";
                                                                                                } ?>"><br>
                    <label for="medName(gen)" class="label-title">Generics Name:</label>
                    <input type="text" class="form-input" name="genName" id="genName" value="<?php if (isset($_COOKIE['gname'])) {
                                                                                                    echo $_COOKIE['gname'];
                                                                                                } else {
                                                                                                    echo " ";
                                                                                                }  ?>"><br>
                    <label for="pharmaname" class="label-title">Manufacture Company:</label>
                    <input type="text" class="form-input" name="comName" id="comName" value="<?php if (isset($_COOKIE['compname'])) {
                                                                                                    echo $_COOKIE['compname'];
                                                                                                } else {
                                                                                                    echo " ";
                                                                                                } ?>"><br>
                    <label for="medtype" class="label-title">Medicine type:</label>
                    <input type="text" class="form-input" name="medtype" id="medtype" value="<?php if (isset($_COOKIE['type'])) {
                                                                                                    echo $_COOKIE['type'];
                                                                                                } else {
                                                                                                    echo " ";
                                                                                                } ?>"><br>
                    <label for="price" class="label-title">Price(1 Pcs)</label>
                    <input type="text" class="form-input" name="medprice" id="medprice" value="<?php if (isset($_COOKIE['price'])) {
                                                                                                    echo $_COOKIE['price'];
                                                                                                } else {
                                                                                                    echo " ";
                                                                                                } ?>"><br>
                    <label for="amount" class="label-title">Enter order Quantity (PCs)</label>
                    <input type="text" class="form-input" name="qtn" id="qtn"><br>

                    <br><br>
                    <input type="submit" value="Confirm" class="btn" style="background-color: #44487c" name="Next">

        </div>
        <br><br>
        </div>
    </form>

    <br><br>
    <?php include "footer.php"; ?>

    <script src="Js/medicinesearch.js"></script>

</body>

</html>