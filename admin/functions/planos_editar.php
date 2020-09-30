<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$valor = $_REQUEST['valor'];
$resumo = $_REQUEST['resumo'];
$descricao = $_REQUEST['descricao'];
$botao = $_REQUEST['botao'];

require("../connections/conn.php");
$sql = "update planos set titulo='$titulo',valor='$valor',resumo='$resumo',descricao='$descricao',botao='$botao' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../planos_atualizado.php'>";
mysqli_close($conn);
?>