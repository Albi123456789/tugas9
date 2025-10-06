<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 p-4 bg-white rounded shadow">
    <h3 class="text-center mb-4">➕ Tambah Barang</h3>
    <form method="post" action="">
        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" step="0.01" name="harga" class="form-control" required>
        </div>
        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = mysqli_query($koneksi, "INSERT INTO barang (nama_barang, stok, harga) VALUES ('$nama','$stok','$harga')");
    if ($query) {
        echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data!');</script>";
    }
}
?>
