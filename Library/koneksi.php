<?php
$server = "localhost";
$user = "perewah_wisata";
$password = "ardimardiana2024";
$nama_database = "perewah_wisata";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
if ($conn->connect_error) {
    echo "Gagal terhubung dengan database: ";
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
} else {
    echo 'Koneksi Berhasil';
}

?>