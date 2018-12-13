<?php include "templates/header.php"; ?>

<main class="main">
    <h1>Hello, <?php echo $_SESSION['firstname']; ?></h1>
    <h3>Are you sure you want to delete your account?</h3>

    <div class="choices">
        <div class="choices-display">
            <form action="includes/delete.inc.php" class="delete-form" method="post">
                <input type="submit" name="deleteSubmit" class="yes-delete form-control" value="Yes">
            </form>
        </div>

        <div class="choices-display">
            <a href="profile.php"><button class="no-delete form-control">No</button></a>
        </div>
    </div>
</main>

<?php include "templates/footer.php"; ?>