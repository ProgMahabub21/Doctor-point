<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "../Controller/appointment-process.php"?>
    <form action="../View/makePayment.html" style="display: inline-block;"><h1>Appointment Details</h1>
        <fieldset> 
        <legend></legend>
               <label for="pname">Patient's Name</label>
               <input type="text" name="pname" value="<?php echo $_COOKIE['UserName'] ?>"><br><br>
               <label for="docname">Doctor's Name</label>
               <input type="text" name="docname" value="<?php echo $docname; ?>"><br><br>
               <label for="dept">Department</label>
               <input type="text" name="dept" value="<?php echo $dept; ?>"><br><br>
               <label for="fee">Appointment Fee</label>
               <input type="text" name="fee" value="<?php echo $fee; ?>"><br><br>
       
        </fieldset> 
           <input type="submit" value="Confirm">
   
       </form>
</body>
</html>