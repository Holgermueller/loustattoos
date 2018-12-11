<?php
session_start();

if(isset($_POST['deleteSubmit'])) {

    require "dbh.inc.php";

    if (!$connection){
        die('Could not connect: ' . mysqli_error());
    }

    $userid = $_SESSION['user_id'];
    $sql = "DELETE FROM users WHERE id = $userid";
    if(mysqli_query($connection, $sql)) {
        header("Location: ../goodbye.php?delete=success");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
    mysqli_close($connection);
}

?>