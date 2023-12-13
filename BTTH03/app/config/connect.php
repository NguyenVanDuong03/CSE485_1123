<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=Quanlysinhvien", "root", "123");
} catch (PDOException $e) {
  die("Lỗi kết nối: " . $e->getMessage());
}
