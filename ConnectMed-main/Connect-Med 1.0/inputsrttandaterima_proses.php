<?php
include 'koneksi.php';
if (isset($_POST['inputsrttandaterima'])) {
    $nokk = $_POST['kk'];
    $total_kk = $_POST['total_kk'];
    $total_ktp = $_POST['total_ktp'];
    $total_akta = $_POST['total_akta'];
    $tempat_keluar = $_POST['tempat_keluar'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];
    $nm_petugas = $_POST['petugas'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO ttdterima VALUES ('$nokk', ' $total_kk', ' $total_ktp', '$total_akta', '$tempat_keluar', '$tanggal_mulai', ' $tanggal_selesai', ' $nm_petugas', '$keterangan')";
    $result = mysqli_query($link, $query);
    if(!$result) {
        die ("Query gagal dijalankan:".mysqli_errno($link)."-".mysqli_error($link));
    }
}
header("location:srttandaterima.php");
?>