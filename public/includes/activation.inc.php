<?php

if(isset($_POST['activate-submit'])){

    require 'dbh.inc.php';

    $activationCode = $_POST['activation-input'];

    if(empty($activationCode)){
        header("Location: ../userActivation.php?error=emptyField");
        exit();
    } else {
        
    }
    

} else {
    header("Location: ../userActivation.php");
    exit();
}

?>