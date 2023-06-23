<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Login masuk Website</title>
</head>

<body>
    <div class="container">
        <section class="login">
            <h2>Login Untuk Masuk</h2>
            <form action="php/cheklogin.php" method="post">
                <input type="text" name="nama" placeholder="Nama" required />
                <input type="text" name="usia" placeholder="Usia" required />
                <input type="text" name="jk" placeholder="Jenis Kelamin" required />
                <input type="text" name="ttl" placeholder="TTL" required />
                <input type="submit" value="Login" />
            </form>
        </section>
    </div>
</body>

</html>