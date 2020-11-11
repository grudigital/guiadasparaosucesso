<?php
$email = $_REQUEST['email'];

require("../admin/connections/conn.php");
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

//verifica se o email existe
$verificaemail = "select * from anunciantes where email='$email'";
$resultadoverifica = mysqli_query($conn, $verificaemail);
$conta_emailscadastrados = mysqli_num_rows($resultadoverifica);

if ($conta_emailscadastrados <= 0 ) {
    echo "<meta http-equiv='refresh' content=0;url='../esqueci-senha-email-incorreto.php'>";
}else if($conta_emailscadastrados === null){
    echo "<meta http-equiv='refresh' content=0;url='../esqueci-senha-email-incorreto.php'>";
}else if($conta_emailscadastrados = null){
    echo "<meta http-equiv='refresh' content=0;url='../esqueci-senha-email-incorreto.php'>";
}
else if($conta_emailscadastrados = ''){
    echo "<meta http-equiv='refresh' content=0;url='../esqueci-senha-email-incorreto.php'>";
}else if($conta_emailscadastrados = 0){
    echo "<meta http-equiv='refresh' content=0;url='../esqueci-senha-email-incorreto.php'>";
}

$sql2 = "select * from anunciantes where email = '$email'";
$result2 = mysqli_query($conn, $sql2);
while ($row2 = mysqli_fetch_assoc($result2)) {
    $id = $row2['id'];
    $titulo = $row2['titulo'];
}


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
    $mail->Subject = 'Recuperar senha no portal GPS';
    $mail->isHTML(true);
    $mail->Body = <<<EOT

<br/>
Ol&aacute; $_POST[titulo],<br/><br/> 

somos da plataforma <strong>Guiadas para o Sucesso</strong>.
<br/><br/> 
Recebemos uma notificação de que você está tentando alterar sua senha. Bom vamos lá, é muito simples, basta clicar em alterar senha abaixo:<br/><br/> 
<a href="http://www.guiadasparaosucesso.com.br/nova-senha.php?id=$id" target="_blank">Alterar senha</a>
<br/><br/> <br/> 
Equipe Guiadas para o Sucesso
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
echo "<meta http-equiv='refresh' content=0;url='../esqueci-senha-enviado.php'>";


mysqli_close($conn);
?>



