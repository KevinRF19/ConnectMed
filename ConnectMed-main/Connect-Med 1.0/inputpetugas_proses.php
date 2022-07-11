<?php
include 'koneksi.php';
if (isset($_POST['inputpetugas'])) {
    $kd_petugas = $_POST['kd_patugas'];
    $nm_petugas = $_POST['nm_petugas'];
    $no_telepon = $_POST['no_telepon'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['cmbLevel'];
    $query = "INSERT INTO petugas VALUES ('$kd_petugas', '$nm_petugas', '$no_telepon', '$username', '$password', '$level')";
    $result = mysqli_query($link, $query);
    if(!$result) {
        die ("Query gagal dijalankan:".mysqli_errno($link)."-".mysqli_error($link));
    }
}
header("location:petugas.php");
?>