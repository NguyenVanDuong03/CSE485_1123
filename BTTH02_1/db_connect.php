<?php

    // Bước 1: Kết nối DB Server
    try {
        $conn = new PDO(dsn: "mysql:host=localhost;dbname=btth02_1", username: "root", password: "123");

        //  Bước 2: Thực hiện truy vấn
        // $sql = "SELECT * FROM comment";
        // $stmt = $conn->prepare($sql);
        // $stmt->execute();

        // // Bước 3: Xử lý kết quả của lệnh truy vấn
        // $comment = $stmt->fetchAll();

        // Test đơn giản
        // echo"<pre>";
        // print_r($comment);
        // echo "</pre>";


    } catch (PDOException $e) {
        echo "". $e->getMessage();
    }

?>