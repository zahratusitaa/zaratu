<?php
require 'functions.php';
 
// cek apakah tombol sumbit sudah ditekan atau belum
if( isset($_POST["sumbit"]) ) {

    // cek apakah data berhasil di tambahkan atau tidak
if( tambah($_POST) > 0 ) {
    echo "
        <script>
              alert('data berhasil ditambahkan! ');
              document.location.herf = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
             alert('data gagal di tambahkan!');
             document.location.herf = 'index.php';
        </script>
    ";

}

}
?>
<!DOCTYPE html>
<html>
<heard>
    <title>Tambah data mahasiswa</title>
</heard>
<body>
    <h1>Tambah data mahasiswa</h1>

    <from action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
                </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="sumbit" name="sumbit">Tambah Data!</button>
            </li>
        </ul>
        
    </from>