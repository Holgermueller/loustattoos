
<?php include "templates/header.php"; ?>

<main class="main">
    <h1>Register</h1>

    <?php
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){
            echo '<p>Fill in all of the fields!</p>';
        }elseif($_GET['error'] == "emptyfields"){
            echo '<p>Fill in all of the fields!</p>';
        }
    }elseif($_GET["signup"] == "success"){
        echo '<p>Signup successful!!</p>';
    }

    ?>

    <form action="includes/signup.inc.php" method="post" class="registration">
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