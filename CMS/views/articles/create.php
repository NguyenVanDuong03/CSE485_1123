<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-primary">Create Article</h1>

        <form method="post" action="index.php?controller=article&action=store">
            <div class="mb-3">
              <label for="title" class="form-label">Titile</label>
              <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="content" class="form-label">Contnet</label>
              <textarea class="form-control" name="content" id="content" required></textarea>
            </div>
            <button type="submit" value="Create" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>
