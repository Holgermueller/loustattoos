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

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $newHashedPwd = password_hash($newpwd, PASSWORD_BCRYPT);

        $sql = "UPDATE users SET userpassword=? WHERE id=?";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Error updating record: " . mysqli_error($connection);
            exit();            
        } else {
            mysqli_stmt_bind_param($stmt, "si", $newHashedPwd, $userid);
            mysqli_stmt_execute($stmt);
            header("Location: ../changePassword.php?passwordChanged=success");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
} else {
    header("Location: ../changePassword.php");
    exit();
}

?>