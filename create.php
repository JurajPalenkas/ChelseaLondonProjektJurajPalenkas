<?php
require_once "classes.php";
require_once "db.php";
$articles = new Articles($conn);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nazov = $_POST['nazov'];
    $kontent = $_POST['kontent'];
    echo $nazov;
    echo $kontent;
    $articles->createArticle($nazov, $kontent);
} ?>
<?php
    require 'header.php';
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <form method="POST">
    <label for="nazov">nazov</label>
    <input type="text" name="nazov" id="nazov" required>

    <label for="kontent">kontent</label>
    <textarea name="kontent" id="kontent" required></textarea>

    <input type="submit" value="Submit">
</form>

<?php
    require 'footer.php';
    ?>
