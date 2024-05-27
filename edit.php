<?php
require_once "classes.php";
require_once "db.php";
require 'header.php';

$articles = new Articles($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nazov = $_POST['nazov'];
    $kontent = $_POST['kontent'];
    $articles->editArticle($id, $nazov, $kontent);
} else {
    $id = $_GET['id'];
    $article = $articles->getArticleById($id);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/css.css">
</head>
<body>
<form method="POST" action="edit.php">
    <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
    <label for="nazov">nazov</label>
    <input type="text" name="nazov" id="nazov" value="<?php echo $article['nazov']; ?>" required>
    <label for="kontent">kontent</label>
    <textarea name="kontent" id="kontent" required><?php echo $article['kontent']; ?></textarea>
    <input type="submit" value="Update">
</form>

</body>
</html>


