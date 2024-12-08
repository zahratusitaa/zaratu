<?php
require 'functions.php';

// ambil data URL
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
 
// cek apakah tombol sumbit sudah ditekan atau belum
if( isset($_POST["sumbit"]) ) {

    // cek apakah data berhasil di ubah atau tidak
if( ubah($_POST) > 0 ) {
    echo "
        <script>
              alert('data berhasil diubah! ');
              document.location.herf = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
             alert('data gagal diubah!');
             document.location.herf = 'index.php';
        </script>
    ";

}

}
?>
<!DOCTYPE html>
<html>
<heard>
    <title>Ubah data mahasiswa</title>
</heard>
<body>
    <h1>Ubah data mahasiswa</h1>

    <from action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
                </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>">
            </li>
            <li>
                <button type="sumbit" name="sumbit">Ubah Data!</button>
            </li>
        </ul>
        
    </from>