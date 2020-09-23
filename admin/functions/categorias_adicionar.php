<?php
require ("../connections/conn.php");

$sql="INSERT INTO anunciantes_categoria (categoria) VALUES ('$_POST[categoria]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../categorias.php'>";
mysqli_close($conn);
?>


