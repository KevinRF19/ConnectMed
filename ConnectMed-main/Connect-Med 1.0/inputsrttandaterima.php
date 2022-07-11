<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {
                text-align: center;
            }
            .container{
                width: 400px;
                margin: auto;
            }
            </style>
    </head>
    <body>
        <h1> Input Data</h1>
        <div class="container">
            <form id="form_srttandaterima" action="inputsrttandaterima_proses.php" method="post">
            <fieldset>
                <legend>Input Data Surat Tanda Terima</legend>
                <p>
                    <label for="nokk">NO KK: </label>
                    <?php
                    $host = "locationhost";
                    $username = "root";
                    $password = "";
                    $db = "dbktp";

                    mysqli_connect($host, $username, $password) or die("Koneksi gagal");
                    mysqli_select_db($db) or die("Database tidak bisa dibuka");
                    ?>
                    <?php
                    include"koneksi.php";
                    echo "<select name='kk'>";
                    $tampil=mysqli_query("SELECT * FROM kk ORDER BY nokk");
                    echo "<option value='belum milih' selected>- Pilih KK -</option>";
                    while($w=mysqli_fetch_array($tampil))
                    {
                        echo "<option value=$w[nokk] selected>$w[nokk]</option>";
        }
                        echo "</select>";
                        ?>
                <p>
                <label for="total_kk">Total KK : </label>
                <input type="text" name="total_kk" id="total_kk" >
                </p>
                <p>
                    <label for="total_ktp">Total KTP : </label>
                    <input type="text" name="total_ktp" id="total_ktp">
                </p>
                <p>
                    <label for="total_akta">Total Akta :
                    </label>
                    <input type="text" name="total_akta" id="total_akta">
                </p>
                <p>
                    <label for="tempat_keluar">Tempat Keluar : </label>
                        <input type="text" name="tempat_keluar" id="tempat_keluar" >
                </p>
                <p>
                    <label for="tanggal_mulai">Tanggal Mulai : </label>
                    <input type="text" name="tanggal_mulai" id="tanggal_mulai" >
                </p>
                </p>
                <label for="tanggal_selesai">Tanggal Selesai : </label>
                <input type="text" name="tanggal_selesai" id="tanggal_selesai" >
                    </p>
                <p>
                    <label for="nm_petugas">Nama Petugas : </label>
                    <?php
                    $host = "localhost";
                    $username = "root";
                    $password = "";
                    $db = "dbktp";

                    mysqli_connect($host, $username, $password) or die("Koneksi gagal");
                    mysqli_select_db($db) or die("Database tidak bisa dibuka");
                    ?>
                    <?php
                    include"koneksi.php";
                    echo "<select name='petugas'>";
                    $tampil=mysqli_query("SELECT * FROM petugas ORDER BY kd_petugas");
                    echo "<option value='belum milih' selected>- Pilih petugas -</option>";
                    while($w=mysqli_fetch_array($tampil))
                    {
                        echo "<option value=$w[nm_petugas] selected>$w[nm_petugas]</option>";
                    }
                    echo "</selected>";
                    ?>
                    <p>
                        <label for="keterangan">Keterangan :</label>
                        <input type="text" name="keterangan" id="keterangan" >
                        </p>

            </fieldset>
            <p>
                <input type="submit" name="inputsrttandaterima" value="Tambah Data">
            </p>
        </form>
        </div>
        <a href="srttandaterima.php">Kembali&gt; </a>
    </body>
</html>