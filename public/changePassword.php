<?php include "templates/header.php"; ?>

<main class="main">
    <h2>Hello, <?echo $_SESSION['username'];?></h2>
<h2>Change your password.</h2>

    <?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 'emptyFields') {
            echo '<p class="error">You must fill out all fields!</p>';
        } elseif($_SESSION['error'] == 'passwordcheck') {
            echo '<p class="error">Your passwords must match!</p>';
        } 
    } elseif($_SESSION["passwordChanged"] == "success"){
        echo '<p>Password change successful!!</p>';
    }
    ?>

<form action="includes/changePassword.inc.php" method="post" class="change-password-form">
    <input type="password" name="oldPassword" class="form-control" placeholder="Current Password">
    <input type="password" name="newPassword" class="form-control" placeholder="New Password">
    <input type="password" name="confirmNewPassword" class="form-control" placeholder="Confirm New Password">
    <input type="text" name="check" value="" style="display:none;">
    <input type="submit" name="change-password-submit" value="Submit" class="change-password-submit form-control">
</form>
<hr>

<a href="profile.php"><button class="password-change-cancel">Cancel</button></a>

</main>

<?php include "templates/footer.php"; ?>