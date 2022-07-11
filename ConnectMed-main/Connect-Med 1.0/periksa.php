<style type="text/css">
<!---
    body {
        background-color: #6666FF;
    }
-->
</style><?php session_start();

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "dbktp";
$conn = mysqli_connect($host, $user, $pass);
if($conn) {
    $sele = mysqli_select_db($dbname);
    if(!$sele) {
        echo mysqli_error();
    }
}

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = mysqli_query("SELECT * FROM petugas WHERE username='$username' && password='$password'");
    $num = mysqli_num_rows($sql);
    if($num==1) {
        $_SESSION['user'] = $username;
        $_SESSION['passwd'] = $password;
        ?>
        <script language="Javascript">alert('Anda berhasil login');
        document.location='index.html'</script>
        <?
    } else {
        ?>
        <script language="Javascript">alert('Username atau password anda salah');
        document.location='login.php'</script>
        <?
    }
}
?>