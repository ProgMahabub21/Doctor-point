<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../View/css/profile.css">
</head>

<body>
    <?php include "../Controller/patientlist.php";
    include "navbar.php";
    ?>
    <form action="../Controller/updateprofile.php" class="signup-form" method="POST">

        <div class="form-header">
            <h2>Profile Details</h2>
        </div>
        <div class="form-body">
            <div class="horizontal-group">
                <div class="form-group left">
                    <label for="fname" class="label-title">First Name:</label>
                    <input type="text" class="form-input" name="fname" id="fname" value="<?php echo $fName ?>" readonly><br><br>
                </div>
                <div class="form-group right">
                    <label for="lname" class="label-title">Last Name:</label>
                    <input type="text" class="form-input" name="lname" id="lname" value="<?php echo $lName ?>" readonly><br><br>
                </div>
            </div>
            <div class="horizontal-group">
                <div class="form-group left">
                    <label for="age" class="label-title">Age : <span style="color:red;">*</span></label>
                    <input type="text" class="form-input" name="age" id="age" value="<?php echo $age ?>"><br><br>
                </div>
                <div class="form-group right">
                    <label for="gender" class="label-title">Gender : <span style="color:red;">*</span></label>
                    <input type="text" class="form-input" name="gender" id="gender" value="<?php echo $gender ?>"><br><br>
                </div>
            </div>
            <div class="horizontal-group">
                <div class="form-group left">
                    <label for="bgs" class="label-title">Blood Group: <span style="color:red;">*</span></label>
                    <input type="text" class="form-input" name="bgs" id="bgs" value="<?php echo $bgs ?>">
                </div>
                
                <div class="form-group right">
                    <label for="contact" class="label-title">Phone: <span style="color:red;">*</span></label>
                    <input type="number" class="form-input" name="contact" id="contact" value="<?php echo $phone ?>"><br><br>
                </div>
                <span style="color:red;">**</span><span> "pos" = positive , "neg" = negative</span>
            </div>
            <div class="form-group">
                <br><br>
                <label for="email" class="label-title">Email:</label>
                <input type="text" class="form-input" name="email" id="email" value="<?php echo $email ?>" readonly><br><br>
            </div>
            <div class="form-group">
                <label for="address" class="label-title">Present Address: <span style="color:red;">*</span></label>
                <input type="text" class="form-input" name="address" rows="4" cols="50" style="height:auto"id="address" value="<?php echo $address ?>" ><br><br>
                
            </div>
        </div>
        <div class="form-footer">
            <span style="color:red;">*</span><span> Can be Updated Only [Must be Valid Info]</span>
            <input type="submit" class="btn" id="update" value="Update" name="update"> <br>
        </div>
      
    </form>
    <?php include "footer.php"; ?>
</body>

</html>