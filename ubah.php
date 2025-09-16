<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang=$id"));
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama  = $_POST['nama'];
    $stok  = $_POST['stok'];
    $harga = $_POST['harga'];
    mysqli_query($koneksi,"UPDATE barang SET nama_barang='$nama', stok='$stok', harga='$harga' WHERE id_barang=$id");
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Ubah Barang</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container py-5 fade-in">
    <h2 class="mb-4 neon-text">Ubah Barang</h2>
    <form method="POST" class="shadow p-4 rounded glass-card">
        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($data['nama_barang']); ?>" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="<?= $data['stok']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" step="0.01" name="harga" class="form-control" value="<?= $data['harga']; ?>" required>
        </div>
        <button class="btn btn-primary pulse">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
