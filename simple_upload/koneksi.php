<?php

$npm = "localhost";
$nama = "root";
$foto = "";
$database = "siswa";

$conn = mysqli_connect($npm, $nama, $foto, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>