<?php 

include "templates/header.php"; 
require 'includes/common.inc.php';

?>

<main class="main">
    <h1>Register</h1>

    <h2 class="error">
    <?php
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){
            echo '<p>Fill in all of the fields!</p>';
        }elseif($_GET['error'] == "invalidefirstname"){
            echo '<p>Please enter a valid first name!</p>';
        } elseif($_GET['error'] == 'invalidlastname') {
            echo '<p>Please enter a valid last name!</p>';
        } elseif($_GET['error'] == 'invalidemailandusername') {
            echo '<p>Invalid username and email!</p>';
        } elseif($_GET['error'] == 'invalidemail') {
            echo '<p>Invalid email!</p>';
        } elseif($_GET['error'] == 'invalidusername') {
            echo '<p>Invalid username!</p>';
        } elseif($_GET['error'] == 'passwordcheck') {
            echo '<p>Your passwords must match!</p>';
        } elseif($_GET['error'] == 'usernametaken') {
            echo '<p>That username is already in use!</p>';
        } elseif($_GET['error'] == 'emailtaken') {
            echo '<p>That email already exists in our databases!</p>';
        }
    }elseif($_GET["signup"] == "success"){
        echo '<p>Signup successful!!</p>';
    }

    ?>
    </h2>


    <form action="includes/signup.inc.php" method="post" class="registration">
        <input name="csrf" type="hidden" value="<?php echo escape($_SESSION["csrf"]); ?>"/>
        <input type="text" name="firstname" id="firstName" placeholder="First Name" class="form-control">
        <input type="text" name="lastname" id="lasstName" placeholder="Last Name" class="form-control">
        <input type="text" name="username" id="userName" placeholder="Username" class="form-control">
        <input type="email" name="email" id="email" placeholder="E-mail" class="form-control">
        <input type="password" name="userpassword" id="userpassword" placeholder="Password" class="form-control">
        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" class="form-control">
        <input type="text" name="check" value="" style="display:none;">
        <input type="submit" name="join-submit" value="Join!" class="join form-control">
    </form>
</main>

<?php include "templates/footer.php"; ?>