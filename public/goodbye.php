<?php include "templates/header.php"; ?>

<main class="main">

    <?php

    if(isset($_GET['delete'])){
        if(isset($_GET['delete']) == "success")
        echo '<h1>Deletion complete.</h1>';
    }

    ?>

    <h1>
        We're sorry to see you go.
    </h1>

    <h2>
        If you change your mind, you're always welcome back!
    </h2>

        <div class="register-button">
            <a href="signup.php">
                <button name="register" class="register form-control">Register</button>
            </a>
        </div>

</main>

<?php include "templates/footer.php"; ?>