<?php include "templates/header.php"; ?>

<main class="main">
    <h1>Edit Profile</h1>

    <form action="includes/update.inc.php" class="edit-profile">
    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['firstname']?>">
    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['lastname']?>">
    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['username']?>">
    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['location']?>">
    <textarea name="Bio" id="" cols="30" rows="10" placeholder="<?php echo $_SESSION['bio']?>" class="form-control"></textarea>
    <input type="text" name="check" value="" style="display:none;">
    <input type="submit" class="form-control">
    </form>

    <hr>
    <a href="changePassword.php"><button class="change-password-button form-control">Change Password</button></a>

    <hr>
    <a href="profile.php"><button class="cancel-update-button form-control">Cancel</button></a>

</main>

<?php include "templates/footer.php"; ?>