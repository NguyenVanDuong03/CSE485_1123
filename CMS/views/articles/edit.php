<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-success">Edit Article</h1>

        <form  method="post" action="index.php?controller=article&action=update">
            <input type="hidden" name="id" value="<?php echo $article['id']; ?>">
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="title" value="<?php echo $article['title']; ?>" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
              <label for="content" class="form-label">Content</label>
              <textarea name="content" id="content" class="form-control" required><?php echo $article['content']; ?></textarea>
</div>
            <button type="submit" value="Update" class="btn btn-success">Submit</button>
        </form>
    </div>
    
</body>
</html>
