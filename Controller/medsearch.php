<?php
include 'dbconn.php';
$q = $_GET["q"];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//get the q parameter from URL


//lookup all links from the xml file if length of q>0
if (strlen($q) > 0) {
    $hint = "";
    $sql = "SELECT * FROM medicine_data WHERE BrandName LIKE '" . $q . "%' OR GenericName LIKE '" . $q . "%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $hint .= $row["BrandName"] . ' (' . $row["GenericName"] . ') ' . '<br>';
        }
    } else {
        $hint = "No results";
    }
}

$response = $hint;

//output the response
echo $response;
