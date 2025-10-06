<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            margin-top: 50px;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .btn-primary {
            background: #6a11cb;
            border: none;
        }
        .btn-primary:hover {
            background: #2575fc;
        }
        table th {
            background-color: #6a11cb;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>📦 Data Barang</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">➕ Tambah Barang</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr align="center">
                <th>No</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga (Rp)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM barang");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr align="center">
                <td><?= $no++ ?></td>
                <td><?= $d['nama_barang'] ?></td>
                <td><?= $d['stok'] ?></td>
                <td><?= number_format($d['harga'], 0, ',', '.') ?></td>
                <td>
                    <a href="ubah.php?id=<?= $d['id_barang'] ?>" class="btn btn-warning btn-sm">✏️ Edit</a>
                    <a href="hapus.php?id=<?= $d['id_barang'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">🗑️ Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
