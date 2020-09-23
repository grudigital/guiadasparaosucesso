<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$pagina = $_REQUEST['pagina'];
$resumo = $_REQUEST['resumo'];
$texto = $_REQUEST['texto'];
$imagem = $_REQUEST['imagem'];


require("../connections/conn.php");
$sql = "update blocos set titulo='$titulo',pagina='$pagina',resumo='$resumo',texto='$texto',imagem='$imagem' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../blocos.php'>";
mysqli_close($conn);
?>