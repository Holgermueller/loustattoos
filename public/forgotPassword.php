<?php include "templates/header.php"; 
require 'includes/common.inc.php';
?>

<main class="main">
    <h2>Fill out the form below</h2>
    <h2>to retrieve your password.</h2>
    <form action="includes/forgotPassword.inc.php" method="post" class="forgot-password-form">
    <input name="csrf" type="hidden" value="<?php echo escape($_SESSION["csrf"]); ?>"/>
    <input type="text" name="forgot-password-username" class="form-control" placeholder="Enter Username">
    <input type="email" name="forgot-password-email" class="form-control" placeholder="Enter E-mail">
    <input type="submit" name="forgot-password-submit" class="form-control" value="Submit">
    </form>

</main>

<?php include "templates/footer.php"; ?>