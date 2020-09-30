<?php
require ("../connections/conn.php");

$sql="INSERT INTO planos (titulo,valor,resumo,descricao,botao,status) VALUES ('$_POST[titulo]','$_POST[valor]','$_POST[resumo]','$_POST[descricao]','$_POST[botao]','$_POST[status]')";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../planos_adicionado.php'>";
mysqli_close($conn);
?>


