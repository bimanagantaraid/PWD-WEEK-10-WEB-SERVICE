<?php 

require_once "koneksi.php";

// query get data mahasiswa dan eksekusi query
$sql = "SELECT * FROM mahasiswa";
$query = mysqli_query($con, $sql);

// looping data 
while($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

// send data sebagai json
header('content-type: application/json');
echo json_encode($data);
mysqli_close($con);