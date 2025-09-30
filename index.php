<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Data Barang</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h1>Data Barang</h1>
  <a href="tambah.php" class="btn">+ Tambah Barang</a>
  <table>
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Stok</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>
    <?php
      $no=1;
      $result = mysqli_query($conn,"SELECT * FROM barang ORDER BY id_barang DESC");
      while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
          <td>$no</td>
          <td>{$row['nama_barang']}</td>
          <td>{$row['stok']}</td>
          <td>Rp ".number_format($row['harga'])."</td>
          <td>
            <a href='ubah.php?id={$row['id_barang']}' class='edit'>Edit</a> |
            <a href='hapus.php?id={$row['id_barang']}' class='delete' onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
          </td>
        </tr>";
        $no++;
      }
    ?>
  </table>
</div>
</body>
</html>
