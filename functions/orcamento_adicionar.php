<?php
require ("../admin/connections/conn.php");
$anunciante = $_REQUEST['anunciante'];

$sql="INSERT INTO anunciantes_orcamento (anunciante,nome,email,telefone,mensagem,datacontato) VALUES ('$_POST[anunciante]','$_POST[nome]','$_POST[email]','$_POST[telefone]','$_POST[mensagem]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../anunciante_enviado.php?id=$anunciante'>";
mysqli_close($conn);
?>


