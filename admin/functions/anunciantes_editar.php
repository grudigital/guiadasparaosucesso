<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$categoria = $_REQUEST['categoria'];
$telefone = $_REQUEST['telefone'];
$logradouro = $_REQUEST['logradouro'];
$numero = $_REQUEST['numero'];
$bairro = $_REQUEST['bairro'];
$complemento = $_REQUEST['complemento'];
$cep = $_REQUEST['cep'];
$datanascimento = $_REQUEST['datanascimento'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];
$divulgaendereco = $_REQUEST['divulgaendereco'];
$inicioplano = $_REQUEST['inicioplano'];
$fimplano = $_REQUEST['fimplano'];
$plano = $_REQUEST['plano'];
$whatsapp = $_REQUEST['whatsapp'];
$email = $_REQUEST['email'];
$facebook = $_REQUEST['facebook'];
$instagram = $_REQUEST['instagram'];
$linkedin = $_REQUEST['linkedin'];
$descricao = $_REQUEST['descricao'];
$senha = $_REQUEST['senha'];
$imagem = $_REQUEST['imagem'];
$video = $_REQUEST['video'];
$status = $_REQUEST['status'];

require("../connections/conn.php");
$sql = "update anunciantes set titulo='$titulo',categoria='$categoria',telefone='$telefone',logradouro='$logradouro',numero='$numero',bairro='$bairro',complemento='$complemento',cep='$cep',datanascimento='$datanascimento',cidade='$cidade',estado='$estado',divulgaendereco='$divulgaendereco',inicioplano='$inicioplano',fimplano='$fimplano',plano='$plano',whatsapp='$whatsapp',email='$email',facebook='$facebook',instagram='$instagram',linkedin='$linkedin',descricao='$descricao',senha='$senha',imagem='$imagem',video='$video',status='$status' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../anunciantes.php'>";
mysqli_close($conn);
?>