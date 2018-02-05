<h3>Have something to say about us?</h3>
<p>Leave your feedback here</p>
<div>
    <p class="req-tip">* Required Fields</p>
    <form id="feedback_form" action="?" enctype="multipart/form-data" method="post">

        <div class="cb-input-group">
            <textarea id="test_text" cols="30" rows="10" name="test_text" required tabindex="4"></textarea>
            <label for="test_text">Your feedback:</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="307200" />
            <input  id="author_avatar" type="file" name="avatar" tabindex="3" />
            <label for="author_avatar">Choose image for your Avatar: </label>
            <input type="text" id="author_from" name="author_from" required placeholder=" " tabindex="2">
            <label for="author_from">Where are you from</label>
            <input type="text" id="author_name"  name="author_name" required placeholder=" " tabindex="1">
            <label for="author_name">Your name</label>
        </div>
        <input type="submit" class="checkout-btn" value="Send" name="put_test" tabindex="5">
    </form>
</div>

<?php

require_once('../engine/resize.php');

if (isset($_POST['put_test']))
{
    $author = htmlspecialchars(trim($_POST['author_name']));
    $author_from = htmlspecialchars(trim($_POST['author_from']));
    $text = htmlspecialchars(trim($_POST['test_text']));

    $uploaddir = 'img/';

    $avatarImg = strtolower(translit_url($author)) . '_' . uniqid() . '.jpg';

    if ($_FILES['avatar']['type'] == 'image/jpeg' && (int)$_FILES['avatar']['size'] <= $_POST['MAX_FILE_SIZE']) {
            create_thumbnail($_FILES['avatar']['tmp_name'], $uploaddir.$avatarImg, 83, 83);
            $sql = "INSERT INTO testimonials (add_date, author, avatar, test_text, author_from) VALUES (now(), '$author', '$uploaddir$avatarImg', '$text', '$author_from');";
            if (executeQuery($sql)) {
                echo "<script>alert('Спасибо за Ваш отзыв!\\nОн будет опубликован после проверки.')</script>";
            };

    } else {
        echo "<br/>Loaded file in not an image OR it's size more than 1Mb! Try again!";
        die();
    }
}

?>