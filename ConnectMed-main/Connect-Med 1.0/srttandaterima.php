<?

session_start();
if(!isset($_SESSION['user']) ||
!isset($_SESSION['passwd'])) {
    ?><script language='javascript'>alert('Anda belum login. Tolong login dulu' );
    document.location='login.php'</script><?
} else {
    ?>
    <?php
    include 'koneksi.php';
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <style>
            table{
                width: 840px;
                margin: auto;
            }
            h1{
                text-align: center;
            }
            </style>
        </head>
        <body>
            <h1>Tabel Surat Tanda Terima</h1>
            <center>
                <a href="inputsrttandaterima,php">Input
                    surat tanda terima &gt;</a>
                    <a href="inputsrttandaterima,php"> </a>
            </center>
        </br>
        <table border="1">
            <tr>
            <th>NO</th>
                    <th>No</th>
                    <th>Nomor KK</th>
                    <th>Total KK</th>
                    <th>Total KTP</th>
                    <th>Total Akta</th>
                    <th>Tempat Keluar</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Petugas</th>
                    <th>Keterangan</th>
                    <th>Pilihan</th>
            </tr>
            <?php
            $query = "SELECT * FROM ttdterima ORDER BY nokk ASC";
            $result = mysqli_query($link, $query);
            if(!$result) {
                die ("Query error: ".mysqli_errno($link)."-".mysqli_error($link));
            }

            $no = "1";
            while($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$data[nokk]</td>";
                echo "<td>$data[total_kk]</td>";
                echo "<td>$data[total_ktp]</td>";
                echo "<td>$data[total_akta]</td>";
                echo "<td>$data[tempat_keluar]</td>";
                echo "<td>$data[tanggal_mulai]</td>";
                echo "<td>$data[tanggal_selesai]</td>";
                echo "<td>$data[petugas]</td>";
                echo "<td>$$data[keterangan]</td>";
                echo '<td>
                <a href="editsrttandaterima.php?nokk='.$data['nokk'].'">Edit</a> /
                <a href ="hapussrttandaterima.php?nokk='.$data['nokk'].'" onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
                </td>';
                echo "</tr>";
                $no++;
            }
            ?>
        </table>
        <p>&nbsp;</p>
        <p><a href="index.html">Kembali &gt; </a></p>
        </body>
    </html>
<? } ?>