<?php

header("Location: ../goodbye.php?delete=success");
exit();

if(isset($_POST['deleteSubmit'])) {

    require "dbh.inc.php";

    if (!$connection){
        die('Could not connect: ' . mysqli_error());
    }

    $userid = $_GET['user_id'];
    $sql = "DELETE FROM users WHERE id =" . $userid;
    if(mysqli_query($connection, $sql)) {
        header("Location: ../goodbye.php?delete=success");
        exit();
    }
    mysqli_close($connection);
}

?>