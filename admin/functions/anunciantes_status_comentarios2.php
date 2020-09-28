<?php
$id = intval($_REQUEST['id']);

require("../connections/conn.php");
$sql = "update anunciantes_comentarios set status='1' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../anunciantes.php'>";
mysqli_close($conn);
?>