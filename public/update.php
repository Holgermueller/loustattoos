<?php 
include "templates/header.php"; 
require 'includes/common.inc.php';
?>

<main class="main">
    <h1>Edit Profile</h1>

    <form action="includes/update.inc.php" class="edit-profile" method="post">
    <input name="csrf" type="hidden" value="<?php echo escape($_SESSION["csrf"]); ?>"/>
    <input type="text" name="newfirst" class="form-control" value="<?php echo $_SESSION['firstname']?>">
    <input type="text" name="newlast" class="form-control" value="<?php echo $_SESSION['lastname']?>">
    <input type="text" name="newusername" class="form-control" value="<?php echo $_SESSION['username']?>">
    <input type="email" name="newemail" class="form-control" value="<?php echo $_SESSION['email']?>">
    <input type="text" name="newlocation" class="form-control" value="<?php
                                                                        $locationDisplay = $_SESSION['location'];
                                                                        if(empty($locationDisplay)){
                                                                            echo 'enter location';
                                                                        } else {
                                                                            echo $locationDisplay;
                                                                        }?>">
    <textarea name="newbio" id="" cols="30" rows="10" value="<?php
                                                            $bioInfo = $_SESSION['bio'];
                                                            if(empty($bioInfo)){
                                                                echo 'Enter bio';
                                                            } else {
                                                                echo $bioInfo;
                                                            }?>" class="form-control"></textarea>
    <input type="text" name="check" value="" style="display:none;">
    <input type="submit" name="update-form-submit" class="form-control">
    </form>

    <hr>
    <h2>Click here to change your password.</h2>
    <a href="changePassword.php"><button class="change-password-button form-control">Change Password</button></a>

    <hr>
    <a href="profile.php"><button class="cancel-update-button form-control">Cancel</button></a>

</main>

<?php include "templates/footer.php"; ?>