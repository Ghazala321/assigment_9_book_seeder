<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 15px; background: #007BFF; color: white; border: none; cursor: pointer; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>

    <h2>Add a New Book</h2>

    <form action="/books" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Book Title:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="price">Book Price:</label>
            <input type="number" step="0.01" id="price" name="price" required>
        </div>

        <div class="form-group">
            <label for="author">Book Author:</label>
            <input type="text" id="author" name="author" required>
        </div>

        <button type="submit">Submit Book</button>
    </form>

</body>
</html>