<?php 
// url webservice
$url = "http://localhost/praktikum/PWD/week_10/getdatamhs.php";
// menginisialisi sesi baru
$client = curl_init($url);
// mengatur opsi pada curl dengan kembalian berupa string
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
// mengeksekusi query curl
$response = curl_exec($client);
// mengubah menjadi objek json menjadi objek php
$result = json_decode($response);
// looping data untuk ditampilkan
foreach($result as $r){
    echo "<p>";
    echo "NIM : ".$r->nim."<br />";
    echo "Nama : ".$r->Nama."<br />";
    echo "Jenis Kel : ".$r->nim."<br />";
    echo "ALamat : ".$r->nim."<br />";
    echo "Tgl-Lhair : ".$r->nim."<br />";
    echo "</p>";
}