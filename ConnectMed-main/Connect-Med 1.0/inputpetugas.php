<!DOCTYPE html>
    <html>
        <head>
            <style>
            h1{
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
            <form id="form_petugas" action="inputpetugas_proses.php" method="post">
            <fieldset>
                <legend>Input Data Petugas</legend>
                <p>
                <label for="kd_petugas">Kode Petugas : </label>
                <input type="text" name="kd_petugas" id="kd_petugas" >
                </p>
                <p>
                    <label for="nm_petugas">Nama Petugas : </label>
                    <input type="text" name="nm_petugas" id="nm_petugas">
                </p>
                <p>
                    <label for="no_telepon">No Telepon : </label>
                    <input type="text" name="no_telepon" id="no_telepon">
                </p>
                <p>
                    <label for="username">Username : </label>
                        <input type="text" name="username" id="username" >
                </p>
                <p>
                    <label for="password">Password : </label>
                    <input type="text" name="password" id="password" >
                </p>
                </p>
                <label for="level">Level : </label>
                <select name="cmbLevel">
                    <option value="Kosong">....</option>
                    <?php
                    $pilihan = array("Admin", "Petugas");
                    foreach ($pilihan as $nilai) {
                        if ($dataLevel==$nilai) {
                            $cek=" selected ";
                        } else { $cek = ""; }
                        echo "<option value='$nilai' $cek>$nilai</option>";
                    }
                    ?>
                </select>
                    </p>
            </fieldset>
                <p>
                    <input type="submit" name="inputpetugas" value=" Tambah Data">
                </p>
            </form>
        </div>
        <a href="petugas.php">Kembali&gt; </a>
        </body>
    </html>