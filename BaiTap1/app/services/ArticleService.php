<?php

require_once APP_ROOT."/app/models/Article.php";
class ArticleService {
    public function getAllArticles() {
        // Buoc 1: Ket noi Database
        // try {
        //     $conn = new PDO("mysql:host=localhost;dbname=hms","root","123");
            $dbConnection = new DBConnection();
            $conn = $dbConnection->getConnection();
            if($conn != null) {
                // Buoc 2: Truy van du lieu
                $sql = "SELECT * FROM articles ORDER BY id DESC";
                $stmt = $conn->query($sql);
                
                // Buoc 3: Xu ly ket qua tra ve
                $patients = [];
                while ($row = $stmt->fetch()) {
                    $article = new Article( $row["id"], $row["title"], $row["content"]);
                    $articles[] = $article;
                }
                return $articles;
            }

        // } catch (PDOException $e) {
        //     return $patient = [];
        //     // $conn = null;
        //     // echo $e->getMessage();
        // }
    }
}
?>