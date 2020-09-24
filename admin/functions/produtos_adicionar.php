<?php
require ("../connections/conn.php");

$sql="INSERT INTO produtos (titulo,resumo,descricao,linkpagamento,preconovo,precoantigo,status,datacadastro) VALUES ('$_POST[titulo]','$_POST[resumo]','$_POST[descricao]','$_POST[linkpagamento]','$_POST[preconovo]','$_POST[precoantigo]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos.php'>";
mysqli_close($conn);
?>