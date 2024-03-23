<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "film");

// ambil data dari tabel 
$result = mysqli_query($koneksi, "SELECT * from data_film");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
  <h1>Daftar dosen</h1>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>id</th>
        <th>judul</th>
        <th>kode_film</th>
        <th>jenis_film</th>
        <th>kriteria_film</th>
        <th>durasi</th>
      </tr>

      <?php $i=1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['kode_film'] ?></td>
            <td><?= $row['jenis_film'] ?></td>
			<td><?= $row['kriteria_film'] ?></td>
			<td><?= $row['durasi'] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile ?>      
    </table>
</body>
</html>