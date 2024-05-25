<?php
require_once "classes.php";
require_once "db.php";

$articles = new Articles($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nazov = $_POST['nazov'];
    $kontent = $_POST['kontent'];
    $articles->editArticle($id, $nazov, $kontent);
} else {
    $id = $_GET['id'];
    $article = $articles->getArticleById($id);
?>

<form method="POST" action="edit.php">
    <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
    <label for="nazov">nazov</label>
    <input type="text" name="nazov" id="nazov" value="<?php echo $article['nazov']; ?>" required>
    <label for="kontent">kontent</label>
    <textarea name="kontent" id="kontent" required><?php echo $article['kontent']; ?></textarea>
    <input type="submit" value="Update">
</form>

<?php
}
?>