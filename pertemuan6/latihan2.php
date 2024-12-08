<?php
$mahasiswa = [
    ["zahra", "043050022", "zahra01@gmail.com" , "rekayasa prangkat lunak"],
    ["pebri", "053055230", "pebri05@gmail.com" , "teknik sepeda montor"]
];

// Array associative
// defisinisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "zahra",
     "nrp" => "043050022",
     "email" => "zahra01@gmail.com",
     "jurusan" => "rekayasa perangkat lunak",
     "gambar" => "anya.png"
    ],
    [
        "nama" => "pebri",
        "nrp" => "053055230",
        "email" => "pebri05@gmail.com",
        "jurusan" => "teknik sepeda montor",
        "gamabar" => "damian.png"
    ]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/anya.png"<?= $mhs["gambar"]; ?>>
    </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul> 
   <?php endforeach; ?>
</body>
</html>


</body>
</html>