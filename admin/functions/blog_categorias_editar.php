<?php
$id = intval($_REQUEST['id']);
$categoria = $_REQUEST['categoria'];

require("../connections/conn.php");
$sql = "update blog_categorias set categoria='$categoria' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../blog_categorias.php'>";
mysqli_close($conn);
?>