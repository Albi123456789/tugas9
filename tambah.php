<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
    $nama  = $_POST['nama_barang'];
    $stok  = $_POST['stok'];
    $harga = $_POST['harga'];
    mysqli_query($conn,"INSERT INTO barang (nama_barang,stok,harga) VALUES ('$nama','$stok','$harga')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tambah Barang</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h1>Tambah Barang</h1>
  <form method="post">
    <input type="text" name="nama_barang" placeholder="Nama Barang" required>
    <input type="number" name="stok" placeholder="Stok" required>
    <input type="number" name="harga" placeholder="Harga" required>
    <button type="submit" name="simpan" class="btn">Simpan</button>
  </form>
</div>
</body>
</html>
