<?php
$id = intval($_REQUEST['id']);

require("../connections/conn.php");
$sql = "update blog_comentarios set status='2' where publicacao=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../blog.php'>";
mysqli_close($conn);
?>