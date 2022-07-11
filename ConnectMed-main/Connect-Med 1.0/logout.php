<?
session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['password'])) {
    ?>  <script language='javascript'> document.location='login.php'</script><?
} else {
    unset($_SESSION);
    session_destroy();
    ?>
    <script language='javasript'> document.location='login.php'</script>
    <?
}
?>