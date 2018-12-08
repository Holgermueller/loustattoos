<?php include "templates/header.php"; ?>

<main class="main">
    <h1>Edit Profile</h1>

    <form action="" class="edit-profile">
    <input type="text" class="form-control" placeholder="firstname">
    <input type="text" class="form-control" placeholder="lastname">
    <input type="text" class="form-control" placeholder="username">
    <input type="text" class="form-control" placeholder="location">
    <input type="text" class="form-control" placeholder="bio">
    <textarea name="Bio" id="" cols="30" rows="10" placeholder="About me..." class="form-control"></textarea>
    <input type="text" name="check" value="" style="display:none;">
    <input type="submit" class="form-control">
    </form>

    <hr>

    <a href="changePassword.php"><button class="change-password-button form-control">Change Password</button></a>

</main>

<?php include "templates/footer.php"; ?>