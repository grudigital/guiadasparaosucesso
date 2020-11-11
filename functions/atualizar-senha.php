<?php
$id = intval($_REQUEST['id']);
$pass = $_REQUEST['senha'];

require("../admin/connections/conn.php");
$sql = "update anunciantes set senha= MD5('$pass') where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../senha-atualizada.php'>";
mysqli_close($conn);
?>
