<?php
session_start();

if(isset($_POST['update-form-submit'])){
    require 'dbh.inc.php';

    $userid = $_SESSION['user_id'];

    $firstname = $_POST['newfirst'];
    $lastname = $_POST['newlast'];
    $username = $_POST['newusername'];
    $email = $_POST['newemail'];
    $location = $_POST['newlocation'];
    $bioinfo = $_POST['newbio'];

                $sql = "UPDATE users SET 
                            firstname = ?,
                            lastname = ?,
                            username = ?,
                            email = ?,
                            location = ?,
                            bio = 
                WHERE id = $userid";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../update.php?error=sqlerror");
                exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $username, $email, $location, $bioinfo);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../update.php?signup=success");
                    exit();
                }
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
} else {
    header("Location: ../update.php");
    exit();
}

?>