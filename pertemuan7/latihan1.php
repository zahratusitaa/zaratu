<?php 
// $_GET
$mahasiswa =[
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
        "gambar" => "damian.png"
        ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>    <?php foreach( $mahasiswa as $mhs ): ?>
        <li>
          <a href="latihan2.php?nama=<?=$mhs["nama"];?>%nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    
    </ul>

</body>
</html>