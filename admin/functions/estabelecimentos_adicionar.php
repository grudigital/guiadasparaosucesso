<?php
require ("../connections/conn.php");

$sql="INSERT INTO estabelecimentos (titulo,descricao,logradouro,numero,complemento,bairro,cep,cidade,estado,telefone,site,imagem,datacadastro) VALUES ('$_POST[titulo]','$_POST[descricao]','$_POST[logradouro]','$_POST[numero]','$_POST[complemento]','$_POST[bairro]','$_POST[cep]','$_POST[cidade]','$_POST[estado]','$_POST[telefone]','$_POST[site]','$_POST[imagem]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../estabelecimentos.php'>";
mysqli_close($conn);
?>


