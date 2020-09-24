<?php
$id = intval($_REQUEST['id']);
$titulo = $_REQUEST['titulo'];
$imagem = $_REQUEST['imagem'];
$link = $_REQUEST['link'];
$status = $_REQUEST['status'];
$datacadastro = $_REQUEST['datacadastro'];


require("../connections/conn.php");
$sql = "update banners set titulo='$titulo',imagem='$imagem',link='$link',status='$status',datacadastro='$datacadastro' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../banners.php'>";
mysqli_close($conn);
?>