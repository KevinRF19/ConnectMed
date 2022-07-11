<?
session_start();
if(!isset ($_SESSION ['user']) || 
!isset ($_SESSION ['password'])) {
    ?><script language='javascript'>alert ('Anda belum login. Tolong login dulu');
    document.location='login.php'</script><?
} else{
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
            </body>
            <h1>Table KTP</h1>
            <center>
                <a href="inputkktp.php">Input KTP &gt;</a>
                <a href="inputktp.php"> </a>
            </center>
            <br/>
            <table border="1">
                <tr>
                    <th>NO</th>
                    <th>Nomor Induk Keluarga</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th>Kelurahan_Desa</th>
                    <th>Agama</th>
                    <th>Status Perkawinan</th>
                    <th>Pekerjaan</th>
                    <th>Kewarganegaraan</th>
                    <th>Berlaku Hingga</th>
                    <th>Tempat Keluar</th>
                    <th>Tanggal Keluar</th>
                    <th>Pilihan</th>
                </tr>
                <?php
                $query = "SELECT * FROM ktp ORDER BY nik ASC";
                $result = mysqli_query($link, $query);
                if(!$result){
                    die ("Query Error: ".mysqli_errno($link)."-".mysqli_error($link));
                }

                $no = 1;
                while($data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>$data[nik]</td>";
                    echo "<td>$data[nama]</td>";
                    echo "<td>$data[tempat_lahir]</td>";
                    echo "<td>$data[tanggal_lahir]</td>";
                    echo "<td>$data[jenis_kelamin]</td>";
                    echo "<td>$data[alamat]</td>";
                    echo "<td>$data[rt]</td>";
                    echo "<td>$data[rw]</td>";
                    echo "<td>$data[kelurahan_desa]</td>";
                    echo "<td>$data[agama]</td>";
                    echo "<td>$data[status_perkawinan]</td>";
                    echo "<td>$data[pekerjaan]</td>";
                    echo "<td>$data[kewarganegaraan]</td>";
                    echo "<td>$data[berlaku_hingga]</td>";
                    echo "<td>$data[tempat_keluar]</td>";
                    echo "<td>$data[tanggal_keluar]</td>";
                    echo '<td>
                    <a href="editktp.php?nokk='.$data['nikk'].'">Edit</a>
                    /
                    <a href="hapusktp.php?nokk='.$data['nik'].'" onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
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