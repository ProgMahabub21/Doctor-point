<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Give Feedback</title>
</head>

<body>
  <form action="../Controller/feedback-validate.php" style="display: inline-block" method="post">
  <?php include "../Controller/feedback-validate.php";?>
    <fieldset>
      <legend>
        <h4>Patient's Feedback Form</h4>
      </legend>
      <label for="name">Doctor's Name</label><br />
      <select name="docname" id="docname">
        <?php
        foreach ($userData as $key => $value) {
         $docname = $userData[$key]["First Name"]." ". $userData[$key]["Last Name"]." (". $userData[$key]["department"].")";
          
         echo "<option value='.$docname.'>" . $docname. "</option>";
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