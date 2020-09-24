<?php
$id = intval($_REQUEST['id']);
$video = $_REQUEST['video'];


require("../connections/conn.php");
$sql = "update produtos set video='$video' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos.php'>";
mysqli_close($conn);
?>