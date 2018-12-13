<?php include "templates/header.php"; 
require 'includes/common.inc.php';
?>

<main class="main">
    <h2>Enter your e-mail below</h2>
    <h2>and we'll resend your code.</h2>
    <form action="includes/resendActivation.inc.php" class="resend-code-form">
        <input name="csrf" type="hidden" value="<?php echo escape($_SESSION["csrf"]); ?>"/>
        <input type="email" name="email-to-resend-activationcode" class="form-control" placeholder="Enter Email">
        <input type="text" name="check" value="" style="display:none;">
        <input type="submit" class="form-control" name="resend-submit" value="submit">
    </form>

</main>

<?php include "templates/footer.php"; ?>