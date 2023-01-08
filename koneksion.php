<?php

$id = "localhost";
$nama = "root";
$database = "search";

$conn = mysqli_connect($id, $nama, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>