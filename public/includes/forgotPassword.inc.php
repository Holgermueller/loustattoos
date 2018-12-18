<?php

if(isset($_POST['forgot-password-submit'])) {

    require "dbh.inc.php";

    $username = $_POST['forgot-password-username'];
    $email = $_POST['forgot-password-email'];

    if(empty($username) || empty($email)) {
        header("Location: ../forgotPassword.php?error=emptyfields");
        exit();
    }

} else {
    header("Location: ../forgotPassword.php");
    exit();
}

?>