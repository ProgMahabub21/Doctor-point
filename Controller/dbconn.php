<html>
    <body>
        
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "admin2020";
            $dbname = "doctor_point";
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            //echo "Connected successfully";
        ?>
    </body>
</html>