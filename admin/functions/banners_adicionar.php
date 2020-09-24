<?php
require ("../connections/conn.php");

$sql="INSERT INTO banners (titulo,link,local,status,datacadastro) VALUES ('$_POST[titulo]','$_POST[link]','$_POST[local]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../banners.php'>";
mysqli_close($conn);
?>