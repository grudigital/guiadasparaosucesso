<?php
$id = intval($_REQUEST['id']);

require("../admin/connections/conn.php");
$sql = "update anunciantes_comentarios set status='1' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../areasocio_comentarios.php'>";
mysqli_close($conn);
?>