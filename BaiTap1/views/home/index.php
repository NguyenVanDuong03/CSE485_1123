<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý Bài báo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Quản lý Bài báo</h3>
        <a href="<?= DOMAIN.'views/article/create.php';?>" class="btn btn-success">Thêm mới</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã bài báo</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Nội dung</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($articles as $article) {
    ?>
        <tr>
          <th scope="row"><?= $article->getId(); ?></th>
          <td><?= $article->getTitle(); ?></td>
          <td><?= $article->getContent(); ?></td>
          <td><a href="<?= DOMAIN.'views/article/edit.php?id='.$article->getId(); ?>"><i class="bi bi-pencil-square"></i></a></td>
          <td><a href="<?= DOMAIN.'views/article/remote.php?id='.$article->getId(); ?>"><i class="bi bi-trash3"></i></a></td>
        </tr> 
    <?php
        }
    ?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>