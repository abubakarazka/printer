<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kotak">
        <h3>Toko Printer</h3>
        <h4>Hallo selamat datang, silahkan login  ya!</h4>
        <form action="process.php" method="post">
            <label for="username">Username</label><br />
            <input type="text" name="username" id="username" class="form-control"><br /> <br />

            <label for="password">Password</label><br />
            <input type="password" name="password" id="password" class="form-control"><br /> <br />

            <button type="submit">Log in</button>
        </form>
    </div>
</body>
</html>