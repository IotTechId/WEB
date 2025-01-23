<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .info-box {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            max-width: 640px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        .image-placeholder {
            margin: 20px auto;
            max-width: 640px;
            border: 1px dashed #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #eaeaea;
        }
        .image-placeholder img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1>Masya Allah</h1>
    <div class="image-placeholder">
        <img src="./sewupari.jpg" alt="Love">
    </div>
    <div class="info-box">
        <p><strong>ServerName:</strong> <?php echo $_SERVER['HTTP_HOST']; ?></p>
        <p><strong>DocumentRoot:</strong> <?php echo getcwd(); ?></p>
    </div>
</body>
</html>
