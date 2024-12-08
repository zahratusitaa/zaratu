<?php
function salam ($waktu = "datang",$nama = "Admin"){
    return "selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>latihan function</title>
</head>
<body>
    <h1><?= salam("pagi", "zahra"); ?></h1>
</body>
</html>