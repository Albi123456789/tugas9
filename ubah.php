<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM barang WHERE id_barang=$id"));

if(isset($_POST['update'])){
    $nama  = $_POST['nama_barang'];
    $stok  = $_POST['stok'];
    $harga = $_POST['harga'];
    mysqli_query($conn,"UPDATE barang SET nama_barang='$nama', stok='$stok', harga='$harga' WHERE id_barang=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ubah Barang</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h1>Ubah Barang</h1>
  <form method="post">
    <input type="text" name="nama_barang" value="<?= $data['nama_barang'] ?>" required>
    <input type="number" name="stok" value="<?= $data['stok'] ?>" required>
    <input type="number" name="harga" value="<?= $data['harga'] ?>" required>
    <button type="submit" name="update" class="btn">Update</button>
  </form>
</div>
</body>
</html>
