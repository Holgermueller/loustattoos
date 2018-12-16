<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read-It!</title>

<!--styles-->
<link rel="stylesheet" href="./css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Charmonman:700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link type="text/plain" rel="author" href="http://read-it/humans.txt">
</head>
<body>

<header class="header">
    <section class="brand welcome-header">
        <a href="../index.php">
        <h1 class="app-name header-elem">
        <i class="fas fa-book"></i>
            Read It!
        </h1>
        </a>
    </section>

    <section class="login-logout-forms">
        <?php
        if(!isset($_SESSION['user_id'])){
            echo '<div class="login-register">
                <div>
                <form action="includes/login.inc.php" method="post">
                <input name="csrf" type="hidden" value="<?php echo escape($_SESSION["csrf"]); ?>
                <input type="text" name="usernameoremail" placeholder="Username or E-Mail" class="form-control">
                <input type="password" name="userpassword" placeholder="Password" class="form-control">
                <input type="text" name="check" value="" style="display:none;">
                <input type="submit" name="login-submit" value="Log In" class="login form-control">
                </form>
            </div>
            
            <div class="register-button">
                <a href="signup.php">
                <button name="register" class="register form-control">Register</button>
                </a>
        </div>
        <a href="forgotPassword.php">Forgot password?</a>
        </div>';
            
        } else {
            echo '<div>
            <a href="profile.php">
                <button name="register" class="register form-control">Profile</button>
                </a>
            <form action="includes/logout.inc.php" method="post">
                <input type="text" name="check" value="" style="display:none;">
                <input type="submit" name="logout-submit" value="Log Out" class="logout form-control">
            </form>
        </div>';
        }
        ?>
    </section>
</header>
    
</body>
</html>