<?php

$conn = mysqli_connect("localhost", "root", "", "coba_db");
$masuk = mysqli_query($conn, "SELECT * FROM test");


?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Untama</title>
    <link rel="stylesheet" href="style/style.css" type="text/css" />
  </head>
  <body>
    <header>
      <h1>Aplikasi Percobaan Mahasiswa</h1>
    </header>
    <div class="container">
      <aside class="satu">
        <ul class="menu">
          <li><a href="halaman.php">Home</a></li>
          <li>
            <a href="../all_content/konten/Web_percobaan_1/Web_percobaan_1.html">web percobaan 1</a>
          </li>
          <li><a href="">web percobaan 2</a></li>
          <li><a href="">web percobaan 3</a></li>
          <li><a href="../index.html">Keluar</a></li>
        </ul>
      </aside>

      <section class="main">
        <?php
        if(isset($_GET["module"])){
          $nama_file = $_GET["module"];
          include "konten/$nama_file.php";
        }else
        include "konten/profil.php"
        ?>
      </section>
    </div>
    <footer>Copyright &copy; Nashif Rahman</footer>
  </body>
</html>