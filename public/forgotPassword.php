<?php include "templates/header.php"; 
require 'includes/common.inc.php';
?>

<main class="main">
    <h2>Fill out the form below</h2>
    <h2>to retrieve your password.</h2>

    <h2 class="error">

    <?php
    if(isset($_GET['error'])) {
        if($_GET['error'] == "emptyfields") {
            echo "<p>All fields must be filled out.</p>";
        } elseif($_GET['error'] == "invalidemailandusername"){
            echo '<p>Invalid username and email.</p>';
        } elseif($_GET['error'] == 'invalidemail') {
            echo "<p>Invalid email.</p>";
        } else if ($_GET['error'] == 'invalidusername') {
            echo "<p>Invalid username.</p>";
        }
            
    } else if ($_GET["retrieval"] == "success") {
        echo '<p>Retrieval successful!!</p>';
    }
    ?>

    </h2>

    <form action="includes/forgotPassword.inc.php" method="post" class="forgot-password-form">
    <input name="csrf" type="hidden" value="<?php echo escape($_SESSION["csrf"]); ?>"/>
    <input type="text" name="forgot-password-username" class="form-control" placeholder="Enter Username">
    <input type="email" name="forgot-password-email" class="form-control" placeholder="Enter E-mail">
    <input type="submit" name="forgot-password-submit" class="form-control" value="Submit">
    </form>

</main>

<?php include "templates/footer.php"; ?>