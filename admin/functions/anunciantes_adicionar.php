<?php
require ("../connections/conn.php");

$sql="INSERT INTO anunciantes (titulo,categoria,telefone,logradouro,numero,bairro,complemento,cep,datanascimento,cidade,estado,divulgaendereco,inicioplano,fimplano,plano,whatsapp,email,facebook,instagram,linkedin,descricao,senha,status,datacadastro) VALUES ('$_POST[titulo]','$_POST[categoria]','$_POST[telefone]','$_POST[logradouro]','$_POST[numero]','$_POST[bairro]','$_POST[complemento]','$_POST[cep]','$_POST[datanascimento]','$_POST[cidade]','$_POST[estado]','$_POST[divulgaendereco]','$_POST[inicioplano]','$_POST[fimplano]','$_POST[plano]','$_POST[whatsapp]','$_POST[email]','$_POST[facebook]','$_POST[instagram]','$_POST[linkedin]','$_POST[descricao]',MD5('$_POST[senha]'),'$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../anunciantes_adicionado.php'>";
mysqli_close($conn);
?>