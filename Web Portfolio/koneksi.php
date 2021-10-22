<?php
$namaserver     ="localhost";
$username       ="root";
$password       ="";
$namadatabase   ="project_uts";

//membuat koneksi
$conn = mysqli_connect($namaserver,$username,$password,$namadatabase);

//cek koneksi
if (!$conn) {
    die("koneksi gagal".mysqli_connect_error());
} 


?>