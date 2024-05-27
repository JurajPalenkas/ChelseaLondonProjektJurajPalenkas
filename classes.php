<?php
require_once "db.php";
class Articles {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getArticles() {
        $query = "SELECT * FROM clanky";
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
            echo "<td>" . $article['nazov'] . "</td>";
            echo "<td>" . $article['kontent'] . "</td>";
            echo "<td>" . $article['datum'] . "</td>";
            echo "<td><a href='edit.php?id=" . $article['id'] . "' class='btn btn-primary'>Edit</a></td>";
            echo "<td><a href='delete.php?id=" . $article['id'] . "' class='btn btn-danger'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        }
        public function createArticle($nazov, $kontent) {
            $query = "INSERT INTO clanky (nazov, kontent) VALUES (:nazov, :kontent)";
            $stmt = $this->db->prepare($query);
        
            $params = array(
                ':nazov' => $nazov,
                ':kontent' => $kontent
            );
        
            $stmt->execute($params);
            header("location:forum.php");
        }
        public function editArticle($id, $nazov, $kontent) {
            $query = "UPDATE clanky SET nazov = :nazov, kontent = :kontent WHERE id = :id";
            $stmt = $this->db->prepare($query);
        
            $params = array(
                ':id' => $id,
                ':nazov' => $nazov,
                ':kontent' => $kontent
            );
        
            $stmt->execute($params);
            header("location:forum.php");
        }
        
        public function getArticleById($id) {
        $query = "SELECT * FROM clanky WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $params = array(':id' => $id);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function deleteArticle($id) {
            $query = "DELETE FROM clanky WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $params = array(':id' => $id);
            $stmt->execute($params);
            header("location:forum.php");
        }
        
    }
    class User {
        private $db;
    
        public function __construct($db) {
            $this->db = $db;
        }
    
        public function register($username, $password) {
            $query = "SELECT * FROM users WHERE username = :username";
            $stmt = $this->db->prepare($query);
            $stmt->execute(array(':username' => $username));
            if ($stmt->rowCount() > 0) {
                return false;
            }
        
            
            
            $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
            $stmt = $this->db->prepare($query);
            $params = array(':username' => $username, ':password' => md5($password));
            if ($stmt->execute($params)) {
                $login = new User($this->db);
                return $login->login($username, $password);
            } else {
                return false;
            }
            
        }
        public function login($username, $password) {
            $query = "SELECT * FROM users WHERE username = :username AND password = :password";
            $stmt = $this->db->prepare($query);
            $params = array(':username' => $username, ':password' => md5($password));
            $stmt->execute($params);
            if ($stmt->rowCount() == 1) {
                session_start();
                $_SESSION['username'] = $username;
                header("location: forum.php");
            } else {
                return false;
            }
        } 
    }




