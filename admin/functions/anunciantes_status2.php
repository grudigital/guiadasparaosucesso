<?php
$id = intval($_REQUEST['id']);

require("../connections/conn.php");
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$sql2 = "select * from anunciantes where id = '$id'";
$result2 = mysqli_query($conn, $sql2);
while ($row2 = mysqli_fetch_assoc($result2)) {
    $email = $row2['email'];
    $titulo = $row2['titulo'];
};

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'naoresponda@guiadasparaosucesso.com.br';
$mail->Password = 'Gu1ada55uc3ss0';
$mail->setFrom('naoresponda@guiadasparaosucesso.com.br', 'Guiadas para o sucesso');

$mail->addAddress($email, $titulo);
if ($mail->addReplyTo($email, $titulo)) {

    $mail->Subject = 'Cadastro ativado no Guiadas para o Sucesso!';
    $mail->isHTML(true);
    $mail->Body = <<<EOT

<br/>
Ol&aacute; $titulo,<br/><br/> 

seja muito bem vinda(o) a plataforma <strong>Guiadas para o Sucesso</strong>.
<br/><br/> 
Seu cadastro acaba de ser aprovado na plataforma. Disponha agora de todos os recursos exclusivos da plataforma que irá alavancar ainda mais sua carreira. 
<br/><br/><br/>
<img style='width:160px' src='http://www.guiadasparaosucesso.com.br/images/logoescuro.png'>


EOT;
    if (!$mail->send()) {
        $msg = 'Sorry, something went wrong. Please try again later.';
    } else {
        $msg = 'Message sent! Thanks for contacting us.';
    }
} else {
    $msg = 'Share it with us!';
}

$sql = "update anunciantes set status='1' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../anunciantes.php'>";
mysqli_close($conn);
?>
