<?php
$conn = mysqli_connect("localhost", "root", "", "coba_db");
$nama = $_POST["nama"];
$usia = $_POST["usia"];
$jk = $_POST["jk"];
$ttl = $_POST["ttl"];

$mysql = "INSERT INTO test VALUES
('$nama', '$usia', '$jk', '$ttl')";

if(!mysqli_query($conn, $mysql))
die (mysqli_error($conn));

echo"
<script>
alert('Selamat Datang $nama');
window.location.href='../all_content/halaman.php';
</script>";

mysqli_close($conn);

?>