<?php

if(isset($_POST['join-submit'])){

    require 'dbh.inc.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $userpassword = $_POST['userpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    if(empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($userpassword) || empty($confirmpassword)){
        header("Location: ../signup.php?error=emptyfields&firstname=".$firstname."&lastname=".$lastname."&username=".$username."&email=".$email);
        exit();
    } elseif(!preg_match("/^[a-zA-Z]*$/", $firstname)){
        header("Location: ../signup.php?error=invalidefirstname&lastname=".$lastname."&username=".$username."&email=".$email);
        exit();
    } elseif(!preg_match("/^[a-zA-Z]*$/", $lastname)){
        header("Location: ../signup.php?error=invalidlastname&firstname=".$firstname."&username=".$username."&email=".$email);
        exit();
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../signup.php?error=invalidemailandusername&firstname=".$firstname."&lastname=".$lastname);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidemail&firstname=".$firstname."&lastname=".$lastname."&username=".$username);
        exit();
    } elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidusername&firstname=".$firstname."&lastname=".$lastname."&email=".$email);
        exit();
    } elseif($userpassword !== $confirmpassword){
        header("Location: ../signup.php?error=passwordcheck&firstname=".$firstname."&lastname=".$lastname."&username=".$username."&email=".$email);
        exit();
    } else {

        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0) {
                header("Location: ../signup.php?error=usernametakenk&firstname=".$firstname."&lastname=".$lastname."&email=".$email);
            exit();
            } else {
                $sql = "INSERT INTO users (firstname, lastname, username, email, activation_code, userpassword) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../signup.php?error=sqlerror");
                exit();
                } else {

                    $hashedpasssword = password_hash($userpassword, PASSWORD_BCRYPT);

                    $activation_code = bin2hex(openssl_random_pseudo_bytes(16));

                    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $username, $email, $activation_code, $hashedpasssword);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    } mysqli_stmt_close($stmt);
        mysqli_close($connection);
} else {
    header("Location: ../signup.php");
    exit();
}

?>