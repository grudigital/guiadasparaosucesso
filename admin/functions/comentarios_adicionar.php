<?php
require ("../admin/connections/conn.php");
$anunciante = $_REQUEST['anunciante'];

$sql="INSERT INTO anunciantes_comentarios (anunciante,nome,cpf,email,telefone,comentario,status,estrelas,datacomentario) VALUES ('$_POST[anunciante]','$_POST[nome]','$_POST[cpf]','$_POST[email]','$_POST[telefone]','$_POST[comentario]','$_POST[status]','$_POST[estrelas]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../anunciantes_comentado.php?id=$anunciante'>";
mysqli_close($conn);
?>


