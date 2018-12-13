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
    } 
    elseif($newpwd !== $confirmnewpwd) {
        header("Location: ../changePassword.php?error=passwordcheck");
        exit();
    }

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $newHashedPwd = password_hash($newpwd, PASSWORD_BCRYPT);

        $sql = "UPDATE users SET userpassword='$newHashedPwd' WHERE id=$userid";
    
        if (mysqli_query($connection, $sql)) {
            header("Location: ../changePassword.php?passwordChanged=success");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($connection);
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