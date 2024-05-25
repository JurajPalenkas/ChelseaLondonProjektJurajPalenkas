<?php
require_once "classes.php";
require_once "db.php";

$articles = new Articles($conn);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $articles->deleteArticle($id);
} else {
    echo "Error: No ID provided";
}