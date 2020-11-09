<?php
session_start();
include_once("../admin/connections/conn.php");
if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

    $result_usuario = "SELECT * FROM anunciantes WHERE email = '$email' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    $_SESSION['usuarioId'] = $resultado['id'];
    $_SESSION['usuarioNome'] = $resultado['titulo'];
    $_SESSION['usuarioEmail'] = $resultado['email'];
    $_SESSION['usuarioStatus'] = $resultado['status'];

    if($_SESSION['usuarioStatus'] == 2){
        unset(
            $_SESSION['usuarioId'],
            $_SESSION['usuarioNome'],
            $_SESSION['usuarioEmail'],
            $_SESSION['usuarioSenha'],
            $_SESSION['usuarioStatus']
        );
        echo "<meta http-equiv='refresh' content=0;url='../login-desativado.php'>";
    }else{
        echo "<meta http-equiv='refresh' content=0;url='../areasocio.php'>";
    }


} else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    echo "<meta http-equiv='refresh' content=0;url='../index-acesso-negado.php'>";

}
?>