<?php
session_start();

if(isset($_POST['change-password-submit'])){
    require 'dbh.inc.php';

    $userid = $_SESSION['user_id'];

    $oldpwd = $_POST['oldPassword'];
    $newpwd = $_POST['newPassword'];
    $confirmnewpwd = $_POST['confirmNewPassword'];

    if(empty($oldpwd) || empty($newpwd) || empty($confirmnewpwd)){
        header("Location: ../changePassword.php?error=emptyFields");
        exit();
    } elseif($newpwd !== $confirmnewpwd) {
        header("Location: ../changePassword.php?error=passwordcheck");
        exit();
    }

} else {
    header("Location: ../changePassword.php");
    exit();
}

?>