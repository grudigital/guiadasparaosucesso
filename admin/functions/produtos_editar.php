<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$resumo = $_REQUEST['resumo'];
$descricao = $_REQUEST['descricao'];
$linkpagamento = $_REQUEST['linkpagamento'];
$preconovo = $_REQUEST['preconovo'];
$precoantigo = $_REQUEST['precoantigo'];

require("../connections/conn.php");
$sql = "update produtos set titulo='$titulo',resumo='$resumo',descricao='$descricao',linkpagamento='$linkpagamento',preconovo='$preconovo',precoantigo='$precoantigo' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../produtos.php'>";
mysqli_close($conn);
?>