<?php

if(isset($_POST['login-submit'])) {

    require "dbh.inc.php";
    require "common.inc.php";

    $username = $_POST['username'];
    $userpassword = $_POST['userpassword'];

    if(empty($username) || empty($userpassword)){
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($userpassword, $row['userpassword']);
                if($pwdCheck == false){
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                } elseif($pwdCheck == true) {
                    session_start();
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['firstname'] = $row['firstname'];
                    $_SESSION['lastname'] = $row['lastname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['datejoined'] = $row['datejoined'];
                    $_SESSION['userlocation'] = $row['userlocation'];
                    $_SESSION['bio'] = $row['bio'];

                    header("Location: ../profile.php?login=success");
                    exit();
                } else {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }

} else {
    header("Location: ../index.php");
    exit();
}

?>