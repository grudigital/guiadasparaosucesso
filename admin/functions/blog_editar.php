<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$resumo = $_REQUEST['resumo'];
$texto = $_REQUEST['texto'];


require("../connections/conn.php");
$sql = "update blog_publicacoes set titulo='$titulo',resumo='$resumo',texto='$texto' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../blog_atualizado.php'>";
mysqli_close($conn);
?>