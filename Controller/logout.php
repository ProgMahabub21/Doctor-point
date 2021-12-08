

    <?php
    session_start();
    if (isset($_GET['logout'])) {
        echo "Good Bye, See you soon ".$_SESSION['UserName']."<br>";
        echo "You're logging out. redirecting you to login page in 5 sec";
        // setcookie('UserName', "", time() - 86400);
        // setcookie("Usermail", "",time()-86400);
        // setcookie("bname","",time()-89400);
        // setcookie("gname","",time()-89400);
        // setcookie("compname","",time()-89400);
        // setcookie("type","",time()-89400);
        // setcookie("price","",time()-89400);

        session_destroy();
        header("refresh:5;url=../View/login-form.php");
    }
    ?>
