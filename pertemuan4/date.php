<?php
// Date
// Untuk menampilkan tanggal dengan format
echo date("I, D-M-Y");

// Time 
// UNIX Timestrap / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1978
//echo time();
//echo date("I", time()-60*60*24*100);

//mktime
//membuat sendiri detik
//mktime(0,0,0,0,0,0)
//jam  `, menit, detik, bulan, tanggal, tahun
echo date ("I", mktime(0,0,0,7,1,2008));


//strtotime
echo date ("I", strtotime("1 juli 2008"));

?>