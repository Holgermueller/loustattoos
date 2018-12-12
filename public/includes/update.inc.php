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
                        firstname='$firstname',
                        lastname='$lastname',
                        username='$username',
                        email='$email',
                        userlocation='$location',
                        bio='$bioinfo'
                        WHERE id='$userid'";
                if (mysqli_query($connection, $sql)) {
                    header("Location: ../profile.php?updatesuccess=success");
                    exit();
                } else {
                    echo "Error updating record: " . mysqli_error($connection);
                }
    mysqli_close($connection);
} else {
    header("Location: ../update.php");
    exit();
}

?>