<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>
<body>
    
<div class="container">
    <h1 class="text-primary text-center">Article List</h1>

    <a class="btn btn-success" href="index.php?controller=article&action=create">Create Article</a>
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col" class="text-danger">ID</th>
            <th scope="col" class="text-danger">Title</th>
            <th scope="col" class="text-danger">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article): ?>
          <tr>
            <th scope="row"><?php echo $article['id']; ?></th>
            <td><?php echo $article['title']; ?></td>
            <td>
                <a href="index.php?controller=article&action=edit&id=<?php echo $article['id']; ?>"><i class="bi bi-pencil-square"></i></a>
                <a href="index.php?controller=article&action=delete&id=<?php echo $article['id']; ?>"><i class="bi bi-trash3"></i></a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</div>
    
</body>
</html>

