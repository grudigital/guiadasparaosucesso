<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$categoria = $_REQUEST['categoria'];
$telefone = $_REQUEST['telefone'];
$logradouro = $_REQUEST['logradouro'];
$numero = $_REQUEST['numero'];
$bairro = $_REQUEST['bairro'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];
$inicioplano = $_REQUEST['inicioplano'];
$fimplano = $_REQUEST['fimplano'];
$whatsapp = $_REQUEST['whatsapp'];
$email = $_REQUEST['email'];
$facebook = $_REQUEST['facebook'];
$instagram = $_REQUEST['instagram'];
$descricao = $_REQUEST['descricao'];
$senha = $_REQUEST['senha'];
$imagem = $_REQUEST['imagem'];
$video = $_REQUEST['video'];
$status = $_REQUEST['status'];

require("../connections/conn.php");
$sql = "update anunciantes set titulo='$titulo',categoria='$categoria',telefone='$telefone',logradouro='$logradouro',numero='$numero',bairro='$bairro',cidade='$cidade',estado='$estado',inicioplano='$inicioplano',fimplano='$fimplano',whatsapp='$whatsapp',email='$email',facebook='$facebook',instagram='$instagram',descricao='$descricao',senha='$senha',imagem='$imagem',video='$video',status='$status' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../anunciantes.php'>";
mysqli_close($conn);
?>