<?php
$id = intval($_REQUEST['id']);
$local = $_REQUEST['local'];
$categoria = $_REQUEST['categoria'];

require("../connections/conn.php");
$sql = "update categorias_destaques set local='$local',categoria='$categoria' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../categorias_destaques.php'>";
mysqli_close($conn);
?>