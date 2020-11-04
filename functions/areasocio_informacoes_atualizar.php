<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
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
$whatsapp = $_REQUEST['whatsapp'];
$email = $_REQUEST['email'];
$facebook = $_REQUEST['facebook'];
$instagram = $_REQUEST['instagram'];
$linkedin = $_REQUEST['linkedin'];
$descricao = $_REQUEST['descricao'];


require("../admin/connections/conn.php");
$sql = "update anunciantes set titulo='$titulo',telefone='$telefone',logradouro='$logradouro',numero='$numero',bairro='$bairro',complemento='$complemento',cep='$cep',datanascimento='$datanascimento',cidade='$cidade',estado='$estado',divulgaendereco='$divulgaendereco',whatsapp='$whatsapp',email='$email',facebook='$facebook',instagram='$instagram',linkedin='$linkedin',descricao='$descricao' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../areasocio.php'>";
mysqli_close($conn);
?>