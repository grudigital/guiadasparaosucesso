<?php
require ("../connections/conn.php");

$sql="INSERT INTO blocos (titulo,pagina,resumo,texto) VALUES ('$_POST[titulo]','$_POST[pagina]','$_POST[resumo]','$_POST[texto]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../blocos.php'>";
mysqli_close($conn);
?>