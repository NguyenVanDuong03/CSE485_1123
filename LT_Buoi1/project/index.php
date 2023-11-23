<?php include 'header.php'; ?>
<?php include 'products.php'; ?>
<main>
 <h2>Danh Sách Sản Phẩm</h2>
<?php
$pr = $products;
 if (empty($pr)):
  ?>
 <p>Không có sản phẩm nào.</p>
<?php else: ?>
 <ul>
<?php foreach ($pr as $product): ?>
 <li><?= htmlspecialchars($product['name']) ?>: <?= htmlspecialchars($product['price']) ?> VND</li>
<?php endforeach; ?>
 </ul>
<?php endif; ?>
</main>
<?php include 'footer.php'; ?>