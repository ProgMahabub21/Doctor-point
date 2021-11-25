<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Give Feedback</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/feedback.css" />
  <link rel="stylesheet" href="css/heading.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/navigatebar.css" />
</head>

<body>
  <?php require "../Controller/doclist.php"; ?>
  <?php  
        include "navbar.php";
  ?>

  <div class="container">
    <img src="image/pic1.jpg" alt="Feedback" style="width:100% ;height:480px; left:0">
  </div>

  <form action="../Controller/feedback-validate.php" class="signup-form" method="post">
    <div class="form-header" style="background-color: #24869e;">
      <h1 style="color: white;">Patient's Feedback Form</h1>
    </div>

    <div class="form-body">
      <div class="horizontal-group">
        <div class="form-group">
          <label for="name" class="label-title">Doctor's Name</label><br />
          <select name="docname" id="docname" class="form-input">
            <?php
            foreach ($array as $key) {

              $doctorname = $key['docname'];
              echo "<option value='$doctorname'>"  . $doctorname . "</option>";
            }
            ?>
          </select><br><br>
          <label for="dept" class="label-title">Doctor's Department</label><br />
          <select name="dept" id="dept" class="form-input">
            <?php
            foreach ($array as $key) {

              $dept = $key['dept'];
              echo "<option value='$dept'>"  . $dept . "</option>";
            }
            ?>
          </select><br><br>
          <label for="message" class="label-title">Your Feedback Message <span style="color:red;">*</span></label><br />
          <textarea name="message" id="message" cols="30" rows="6" class="form-input" style="height:auto"></textarea>
        </div>
      </div>
    </div>
    <div class="form-footer">
      <span style="color:red;">*</span><span> required</span>
      <input type="submit" class="btn" style="background-color: #44487c;" name="patient" value="Confirm">
    </div>
  </form>

  <?php include "footer.php";?>
</body>

</html>