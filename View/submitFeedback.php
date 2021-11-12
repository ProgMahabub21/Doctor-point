<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Give Feedback</title>
</head>

<body>
  <?php require "../Controller/doclist.php";?>
  <form action="../Controller/feedback-validate.php" style="display: inline-block" method="post">
    <fieldset>
      <legend>
        <h4>Patient's Feedback Form</h4>
      </legend>
      <label for="name">Doctor's Name</label><br />
      <select name="docname" id="docname">
        <?php
        foreach ($array as $key) {
        //  $docname = $userData[$key]["First Name"]." ". $userData[$key]["Last Name"]." (". $userData[$key]["department"].")";
          $doctorname = $key['docname'];
         echo "<option value='$doctorname'>"  .$doctorname. "</option>";
        }
        ?>
      </select><br><br>
      <label for="dept">Doctor's Department</label><br />
      <select name="dept" id="dept">
      <?php
        foreach ($array as $key) {
        //  $docname = $userData[$key]["First Name"]." ". $userData[$key]["Last Name"]." (". $userData[$key]["department"].")";
          //$doctorname = $key['docname'];
          $dept = $key['dept'];
         echo "<option value='$dept'>"  .$dept. "</option>";
        }
        ?>
      </select><br><br>
      <label for="message">Your Feedback Message</label><br />
      <textarea name="message" id="" cols="30" rows="10"></textarea>
      <br />
    </fieldset>
      <br />
    <input type="submit" value="Submit" />
  </form>
</body>

</html>