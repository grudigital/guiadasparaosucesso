<?php
$id = intval($_REQUEST['id']);

require("../connections/conn.php");
$sql = "update planos set status='1' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../planos.php'>";
mysqli_close($conn);
?>