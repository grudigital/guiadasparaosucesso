<?php
require ("../admin/connections/conn.php");

$sql="INSERT INTO anunciantes (email,senha,titulo,categoria,logradouro,numero,bairro,cidade,estado,telefone,whatsapp,status,datacadastro) VALUES ('$_POST[email]',MD5('$_POST[senha]'),'$_POST[titulo]','$_POST[categoria]','$_POST[logradouro]','$_POST[numero]','$_POST[bairro]','$_POST[cidade]','$_POST[estado]','$_POST[telefone]','$_POST[whatsapp]','$_POST[status]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../anunciantes_aprovacao.php>";
mysqli_close($conn);
?>


