<?php include "templates/header.php"; ?>

    <main>

        <section class="profile">
        <h2>Welcome <?php  echo $_SESSION['user_id'];?></h2>

        <?php

        if(isset($_SESSION['user_id'])){
            echo '<p>You are logged in.</p>';
            echo'Welcome'. $_SESSION['user_id'];
            echo $_SESSION['firstname'];
        } else {
            echo '<p>You are logged out.</p>';
        }

        ?>

            <div class="bio">
                <h4>About me:</h4>
                <p>bio info</p>
            </div>

            <div class="update-links">
                <a href="update.php"><button class="editacct">Edit Acct</button></a>
                |
                <a href="delete.php"><button class="delete">Delete Acct</button></a>
            </div>

        </section>

        <section class="booklist">
            <h3>My books:</h3>
            <h4>Books go here...</h4>
        </section>


        
    </main>


<?php include "templates/footer.php"; ?>