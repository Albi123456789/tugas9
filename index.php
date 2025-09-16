<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Barang</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container py-5 fade-in">
    <h1 class="text-center mb-4 neon-text">📦 Data Barang</h1>
    <a href="tambah.php" class="btn btn-primary pulse">➕ Tambah Barang</a>
    <table class="table table-bordered table-hover mt-3 shadow-lg">
        <thead class="table-dark">
            <tr>
                <th>ID</th><th>Nama Barang</th><th>Stok</th><th>Harga</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $result = mysqli_query($koneksi,"SELECT * FROM barang ORDER BY id_barang DESC");
        while($row = mysqli_fetch_assoc($result)): ?>
            <tr class="scale-hover">
                <td><?= $row['id_barang']; ?></td>
                <td><?= htmlspecialchars($row['nama_barang']); ?></td>
                <td><?= $row['stok']; ?></td>
                <td>Rp <?= number_format($row['harga'],0,',','.'); ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row['id_barang']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $row['id_barang']; ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
