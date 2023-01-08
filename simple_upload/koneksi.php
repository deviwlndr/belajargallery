<?php

$id = "localhost";
$nama = "root";
$foto = "";
$database = "simple_upload";

$conn = mysqli_connect($id, $nama, $foto, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>