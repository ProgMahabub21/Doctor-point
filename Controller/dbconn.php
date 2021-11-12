<html>
    <body>
        
        <?php
            $server = "localhost";
            $user = "root";
            $pass = "admin2020";
            $db = "doctor_point";
            
            $conn = mysqli_connect($server, $user, $pass, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        ?>
    </body>
</html>