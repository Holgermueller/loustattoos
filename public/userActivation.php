<?php include "templates/header.php"; ?>

<main class="main">

<h2>You're almost there!</h2>
<h3>Enter and submit your activation code below!</h3>

<form action="includes/activation.inc.php" class="activation-form">
    <input type="text" name="activation-input" class="form-control" placeholder="Activation Code">
    <input type="text" name="check" value="" style="display:none;">
    <input type="submit" name="activate-submit" value="Submit" class="form-control">
    <a href="resendActivation.php" class="form-link">Didn't get code?</a>
</form>

</main>

<?php include "templates/footer.php"; ?>