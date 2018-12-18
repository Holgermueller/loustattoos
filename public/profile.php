<?php include "templates/header.php"; 
require 'includes/common.inc.php';
?>

    <main>

        <section class="profile">
            <?php if($_GET['updatesuccess'] == 'success') {
                echo '<p class="success">Update successful!</p>';
            };?>
        
        <h2>Welcome, <?php  echo $_SESSION['username'];?></h2>

            <div class="profile-photo">
                <i class="fas fa-user-circle"></i>
            </div>
<hr>
            <div class="bio">
                <h4>About me:</h4>
                <h5>Full name: <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];?></h5>
                <h5>Location:
                    <?php

                        echo $_SESSION['userlocation'];
                    ?>
                </h5>
                <h5>Active since: <?php
                $mysqltimestamp = $_SESSION['datejoined'];
                $datejoined = date("m-d-Y");
                echo " " . $datejoined;
                ?></h5>

                <?php 
                $bio = $_SESSION['bio'];
                if(empty($bio)) {
                    echo '<h4>Bio: </h4>';
                    echo '<p>Tell us about yourself!</p>';
                } else {
                    echo '<h4>Bio: </bio>';
                    echo $bio;
                }

                ?>
                
            </div>

            <div class="update-links">
                <a href="update.php"><button name="update" class="editacct">Edit Acct</button></a>
                <hr>
                <a href="delete.php"><button class="delete">Delete Acct</button></a>
            </div>

            <section>
        <a href="userActivation.php">
        <button>Activate</button>
        </a>
        </section>

        </section>

        <section class="book-list">
        <h2>My book list:</h2>
        <hr>
            <div class="book-entry-form">
                <a href="bookEntryForm.php"><button class="book-entry-button"><h3>Add a book!</h3></button></a>
            </div>
            <hr>
            <h2>My books:</h2>
            <div class="book-list-display">
                <h4>Books go here...</h4>
            </div>
            <a href="singleBook.php"><button>singlebook</button></a>
        </section>

    </main>

<?php include "templates/footer.php"; ?>