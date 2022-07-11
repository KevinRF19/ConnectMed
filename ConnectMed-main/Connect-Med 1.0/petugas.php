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
            <h1>Tabel Petugas</h1>
            <center>
                <a href="inputpetugas.php">Input Petugas &gt;</a>
                    <a href="inputpetugas.php"> </a>
            </center>
        </br>
        <table border="1">
            <tr>
            <th>NO</th>
                    <th>No</th>
                    <th>Kode Petugas</th>
                    <th>Nama Petugas</th>
                    <th>No Telepon</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Pilihan</th>
            </tr>
            <?php
            $query = "SELECT * FROM petugas ORDER BY kd_petugas ASC";
            $result = mysqli_query($link, $query);
            if(!$result) {
                die ("Query error: ".mysqli_errno($link)."-".mysqli_error($link));
            }

            $no = "1";
            while($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$data[kd_petugas]</td>";
                echo "<td>$data[nm_petugas]</td>";
                echo "<td>$data[no_telepon]</td>";
                echo "<td>$data[username]</td>";
                echo "<td>$data[password]</td>";
                echo "<td>$data[level]</td>";
                echo '<td>
                <a href="editpetugas.php?kd_petugas='.$data['kd_petugas'].'">Edit</a> /
                <a href ="hapuspetugas.php?kd_petugas='.$data['kd_petugas'].'" onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
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