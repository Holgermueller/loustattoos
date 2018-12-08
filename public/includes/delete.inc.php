<?php

header("Location: ../goodbye.php?delete=success");
exit();

if(isset($_POST['deleteSubmit'])) {

    require "dbh.inc.php";

    $userid = $_SESSION['user_id'];

    $sql = "DELETE * FROM users WHERE id = ?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../delete.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userid);
        mysqli_stmt_execute($stmt);
        header("Location: ../goodbye.php?delete=success");
        exit();
    }
}

?>