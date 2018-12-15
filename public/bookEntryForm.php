<?php include "templates/header.php"; 
require 'includes/common.inc.php';
?>

<main class="main">
    <h1>Add a book:</h1>
    <hr>

    <form action="bookEntryForm.inc.php" method="post" class="book-entry-form">
        <input name="csrf" type="hidden" value="<?php echo escape($_SESSION["csrf"]); ?>"/>
        <input type="text" name="book-title" class="form-control" placeholder="Book Title">
        <input type="text" name="book-author" class="form-control" placeholder="Author">
        <div class="rating">Rating:
            <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
            <label for="star1">☆</label>
            <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
            <label for="star2">☆</label>
            <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
            <label for="star3">☆</label>
            <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
            <label for="star4">☆</label>
            <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
            <label for="star5">☆</label>
            <div class="clear"></div>
        </div>
        <input type="text" name="check" value="" style="display:none;">
        <input type="submit" name="book-submit" class="book-submit form-control" value="submit">
    </form>

    <hr>
    <a href="profile.php"><button class="return form-control">Back to profile</button></a>
</main>

<?php include "templates/footer.php"; ?>