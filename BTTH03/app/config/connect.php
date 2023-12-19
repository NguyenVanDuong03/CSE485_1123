<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=LMS", "root", "123");
} catch (PDOException $e) {
  die("Lỗi kết nối: " . $e->getMessage());
}
