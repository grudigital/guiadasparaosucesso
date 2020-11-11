<?php

require("../admin/connections/conn.php");
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

	$email = $_POST['email'];
	$titulo = $_POST['titulo'];
	
	
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'naoresponda@guiadasparaosucesso.com.br';
    $mail->Password = 'Gu1ada55uc3ss0';
    $mail->setFrom('naoresponda@guiadasparaosucesso.com.br', 'Guiadas para o sucesso');
    $mail->addAddress($email, $titulo);
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Bem vinda(o) ao Guiadas para o Sucesso!';
        $mail->isHTML(true);
        $mail->Body = <<<EOT

<br/>
Ol&aacute; $_POST[titulo],<br/><br/> 

seja muito bem vinda(o) a plataforma <strong>Guiadas para o Sucesso</strong>.
<br/><br/> 
Ao longo dos encontros, o grupo trouxe recursos para adquirir robustez diante das adversidades, bem como essa decodifica&ccedil;&atilde;o do que &eacute; sucesso.
<br/><br/> 

Trazer clareza sobre onde estamos e principalmente para onde vamos. Como sempre dizemos: se voc&ecirc; n&atilde;o sabe onde quer chegar, qualquer caminho serve.
<br/><br/> 
Sabemos que n&atilde;o &eacute; f&aacute;cil essa mudan&ccedil;a de mindset e de qu&atilde;o limitador nosso sistema pode ser.
Ent&atilde;o, porque n&atilde;o engajar e encorajar outras mulheres que tamb&eacute;m desejam ser ainda melhores?
<br/><br/> <br/> 
Entraremos em contato muito em breve para ativa&ccedil;&atilde;o do seu plano 
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
    
    //verifica emails cadastrados
$verificaemail = "select * from anunciantes where email='$_POST[email]'";
$resultadoverifica = mysqli_query($conn, $verificaemail);
$conta_emailscadastrados = mysqli_num_rows($resultadoverifica);

if ($conta_emailscadastrados != null) {
    echo "<meta http-equiv='refresh' content=0;url='../emailjacadastrado.php'>";
} else {
    $sql = "INSERT INTO anunciantes (email,senha,titulo,categoria,logradouro,numero,bairro,cidade,estado,telefone,whatsapp,status,datacadastro) VALUES ('$_POST[email]',MD5('$_POST[senha]'),'$_POST[titulo]','$_POST[categoria]','$_POST[logradouro]','$_POST[numero]','$_POST[bairro]','$_POST[cidade]','$_POST[estado]','$_POST[telefone]','$_POST[whatsapp]','$_POST[status]',now())";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }
    
	echo "<meta http-equiv='refresh' content=0;url='../anunciantes_aprovacao.php>";
}
mysqli_close($conn);
?>



