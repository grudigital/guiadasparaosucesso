<?php

include_once("../admin/connections/conn.php");
$arquivo 	= $_FILES['arquivo']['name'];
$_UP['pasta'] = '../admin/uploads/anunciantes_fotos/';
$_UP['tamanho'] = 1024*1024*100; //5mb
$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
$_UP['renomeia'] = true;

$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

if($_FILES['arquivo']['error'] != 0){
    die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
    exit; //Para a execução do script
}

else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
    echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../areasocio.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
}

//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
else{
    //Primeiro verifica se deve trocar o nome do arquivo
    if($_UP['renomeia'] == true){
        //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
        $nome_final = time().'.jpg';
    }else{
        //mantem o nome original do arquivo
        $nome_final = $_FILES['arquivo']['name'];
    }
    //Verificar se é possivel mover o arquivo para a pasta escolhida
    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){

        $query = mysqli_query($conn, "insert into `anunciantes_fotos` (`anunciante`,`imagem`) values ('$_POST[anunciante]','$nome_final')");

        echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../areasocio.php'>
						<script type=\"text/javascript\">
							alert(\"Imagem salva com Sucesso.\");
						</script>
					";
    }else{
        //Upload não efetuado com sucesso, exibe a mensagem
        echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../areasocio.php'>
						<script type=\"text/javascript\">
							alert(\"Imagem não foi cadastrada com Sucesso.\");
						</script>
					";
    }
}


?>
