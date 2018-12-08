<?php include "templates/header.php"; ?>

    <main>

        <section class="profile">
        <h2>Welcome, <?php  echo $_SESSION['firstname'];?></h2>

            <div class="profile-photo">
                <i class="fas fa-user-circle"></i>
            </div>

        <?php

        if(isset($_SESSION['user_id'])){
            echo'Welcome, '. $_SESSION['firstname'] . " " . $_SESSION['lastname'];
        } else {
            echo '<p>You are logged out.</p>';
        }

        ?>

        <?php
        $mysqltimestamp = $_SESSION['datejoined'];

        $datejoined = date("m-d-Y");

        ?>

            <div class="bio">
                <h4>About me:</h4>
                <h5>Location:</h5>
                <h5>Active since: <?php echo " " . $datejoined;?></h5>
                <h4>Bio: </h4>
                <p>bio info</p>
            </div>

            <div class="update-links">
                <a href="update.php"><button class="editacct">Edit Acct</button></a>
                <a href="delete.php"><button class="delete">Delete Acct</button></a>
            </div>

        </section>

        <section class="book-list">
            <div class="book-entry-form">
                <h3>Add a book:</h3>
                <form action="">
                    <input type="text" placeholder="Title...">
                    <input type="text" name="check" value="" style="display:none;">
                    <input type="submit">
                </form>
            </div>

            <h2>My books:</h2>
            <div class="book-list-display">
                <h4>Books go here...</h4>
            </div>
        </section>


        
    </main>

<?php include "templates/footer.php"; ?>