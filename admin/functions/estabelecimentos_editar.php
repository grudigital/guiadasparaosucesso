<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$descricao = $_REQUEST['descricao'];
$logradouro = $_REQUEST['logradouro'];
$numero = $_REQUEST['numero'];
$complemento = $_REQUEST['complemento'];
$bairro = $_REQUEST['bairro'];
$cep = $_REQUEST['cep'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];
$telefone = $_REQUEST['telefone'];
$site = $_REQUEST['site'];
$imagem = $_REQUEST['imagem'];

require("../connections/conn.php");
$sql = "update estabelecimentos set titulo='$titulo',descricao='$descricao',logradouro='$logradouro',numero='$numero',complemento='$complemento',bairro='$bairro',cep='$cep',cidade='$cidade',estado='$estado',telefone='$telefone',site='$site',imagem='$imagem' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../estabelecimentos.php'>";
mysqli_close($conn);
?>
