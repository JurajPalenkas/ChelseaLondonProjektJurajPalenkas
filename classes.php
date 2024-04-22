<?php
require_once "db.php";
class Articles {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getArticles() {
        $query = "SELECT * FROM articles";
        $result = $this->db->query($query);

        if ($result === false) {
            echo "Error: Unable to fetch articles";
            return;
        }

        $articles = [];
        while ($article = $result->fetch(PDO::FETCH_ASSOC)) {
            $articles[] = $article;
        }

        echo "<table style='width:100%; border:1px solid #0000FF; color:#0000FF; font-family:Arial;'>";
        echo "<tr style='background-color:#0000FF; color:#FFFFFF;'><th>Article ID</th><th>Article Title</th><th>Article Content</th><th>Article Date</th></tr>";
        foreach ($articles as $article) {
            echo "<tr>";
            echo "<td>" . $article['id'] . "</td>";
            echo "<td>" . $article['Nazov'] . "</td>";
            echo "<td>" . $article['kontent'] . "</td>";
            echo "<td>" . $article['datum'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        }
}