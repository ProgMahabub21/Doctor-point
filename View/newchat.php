<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Doc</title>
</head>

<body>
    <?php include "../Controller/doclist.php" ?>
    <form action="../Controller/chat-process.php" method="post" style="display: inline-block;">ChatBox
        <fieldset>
            <legend></legend>
            <label for="docname">Doctor's Name</label>
            <select name="docname" id="docname">
                <?php
                foreach ($userData as $key => $value) {
                    $docname = $userData[$key]["First Name"] . " " . $userData[$key]["Last Name"] . " (" . $userData[$key]["department"] . ")";

                    echo "<option value='.$docname.'>" . $docname . "</option>";
                }
                ?>

            </select><br>
            <br>
            <label for="subject">Problem as Subject</label><br>
            <input type="text" name="subject" id="subject"><br>
            <br>
            <label for="msg">Details (*explain your problem with including your age)</label><br>
            <textarea name="msg" id="msg" cols="30" rows="10"></textarea>

        </fieldset><br>
        <br>
        <input type="submit" value="submit">

    </form>
</body>

</html>