<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 p-4 bg-white rounded shadow">
    <h3 class="text-center mb-4">✏️ Ubah Barang</h3>
    <form method="post" action="">
        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="<?= $d['nama_barang'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" value="<?= $d['stok'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" step="0.01" name="harga" value="<?= $d['harga'] ?>" class="form-control" required>
        </div>
        <button type="submit" name="ubah" class="btn btn-primary">Simpan Perubahan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['ubah'])) {
    $nama = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama', stok='$stok', harga='$harga' WHERE id_barang='$id'");
    echo "<script>alert('Data berhasil diubah!');window.location='index.php';</script>";
}
?>
