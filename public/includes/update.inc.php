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
                        firstname=?,
                        lastname=?,
                        username=?,
                        email=?,
                        userlocation=?,
                        bio=?
                        WHERE id=?";
                $stmt = mysqli_stmt_init($connection);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "Error updating record: " . mysqli_error($connection);
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "ssssssi", $firstname, $lastname, $username, $email, $location, $bioinfo, $userid);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../profile.php?updatesuccess=success");
                    exit();
                }
    mysqli_close($connection);
} else {
    header("Location: ../update.php");
    exit();
}

?>