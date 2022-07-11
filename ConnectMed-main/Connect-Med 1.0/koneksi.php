<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "dbktp";
$link = mysqli_connect($host, $user, $pass, $name);
if (!$link){
    die ("Koneksi dengan database gagal:".mysqli_connect_errno()."-".mysqli_connect_error());
}
?>