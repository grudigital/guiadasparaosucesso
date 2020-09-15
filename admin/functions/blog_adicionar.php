<?php
require ("../connections/conn.php");

$sql="INSERT INTO blog_publicacoes (titulo,categoria,publicador,resumo,texto,datapublicacao) VALUES ('$_POST[titulo]','$_POST[categoria]','$_POST[publicador]','$_POST[resumo]','$_POST[texto]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../blog_adicionada.php'>";
mysqli_close($conn);
?>