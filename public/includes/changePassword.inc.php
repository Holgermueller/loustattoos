<?php
session_start();

if(isset($_POST['change-password-submit'])){
    require 'dbh.inc.php';

    $userid = $_SESSION['user_id'];

    $oldpwd = $_POST['oldPassword'];
    $newpwd = $_POST['newPassword'];
    $confirmnewpwd = $_POST['confirmNewPassword'];

    if($newpwd !== $confirmnewpwd) {
        header("Location: ../changePassword.php?error=passwordCheck");
        exit();
    }

} else {
    header("Location: ../changePassword.php");
    exit();
}

?>