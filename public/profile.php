<?php include "templates/header.php"; ?>

    <main>

    <?php

        if(isset($_SESSION['user_id'])){
            echo '<p>You are logged in.</p>';
            echo'Welcome'. $_SESSION['user_id'];
            echo $_SESSION['username'];
        } else {
            echo '<p>You are logged out.</p>';
        }

    ?>
        
    </main>

<?php include "templates/footer.php"; ?>