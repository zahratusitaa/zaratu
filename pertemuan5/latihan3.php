<?php
$mahasiswa= [
    ["zahra", "043050022", "rekayasa perangkat lunak", "zahra01@gmail.com"],
    ["pebri", "053055230", "teknik sepeda montor", "pebri05@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    
<h1>daftar mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) :?>
<ul>
     <li><?=  $mhs[0] ;?></li>
     <li><?=  $mhs[1] ;?></li>
     <li><?=  $mhs[2] ;?></li>
     <li><?=  $mhs[3] ;?></li>
</ul>
<?php endforeach; ?>

</body>
</html>