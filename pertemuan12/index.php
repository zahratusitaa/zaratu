<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM Mahasiswa");

// tombol cari ditekan 
if( issert($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<heard>
     <title>Halaman Admin</title>
</heard>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<from action="" method="post">

    <input type ="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplate="off">
    <button type ="sumbit" name="cari">Cari!</button>

</from>
<br>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?> " onclick="return confir('yakin');">hapus</a>
    </td>
    <td><img src="img/<?= $row["gambar"]; ?>" width="50">
    </td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>

</body>
</html>
