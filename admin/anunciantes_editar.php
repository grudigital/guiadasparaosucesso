<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: index-acesso-negado.php");
}
?>
<?php include 'includes/header.php' ?>
<body class="fixed-left">
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>
<div id="wrapper">
    <?php include 'includes/menu.php' ?>
    <div class="content-page">
        <div class="content">
            <div class="topbar">
                <nav class="navbar-custom">
                    <!-- Page title -->
                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="ion-navicon"></i>
                            </button>
                        </li>
                        <li class="hide-phone list-inline-item app-search">
                            <h3 class="page-title">Painel de gerenciamento :: Anunciantes :: Editar</h3>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div>
            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <form class="card-body" action="functions/anunciantes_editar.php"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Anunciantes</h4>
                                                <p class="text-muted m-b-30 font-14">Editar anunciante</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");
                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select id,titulo,categoria,telefone,logradouro,numero,bairro,complemento,cep,datanascimento,cidade,estado,inicioplano,fimplano,whatsapp,email,facebook,instagram,linkedin,descricao,senha,imagem,video,status FROM anunciantes where id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    $sqlplanoselecionado = "select a.id aid, a.plano aplano, p.id pid, p.titulo ptitulo from anunciantes as a inner join planos as p on a.plano = p.id where a.id = '$pegaid'";
                                    $resultplanoselecionado = mysqli_query($conn,$sqlplanoselecionado);

                                    $sqlplanos = "select id, titulo from planos";
                                    $resultplanos = mysqli_query($conn, $sqlplanos);

                                    $sqlcategoriaselecionada = "select a.id aid, a.categoria acategoria, ac.id acid, ac.categoria accategoria from anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id where a.id = '$pegaid'";
                                    $resultcategoriaselecionada = mysqli_query($conn,$sqlcategoriaselecionada);

                                    $sqlcategorias = "select id, categoria from anunciantes_categoria";
                                    $resultcategorias = mysqli_query($conn, $sqlcategorias);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<input class='form-control' name='id' type='hidden' value='$row[id]'
                                                   id='example-text-input'>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Título</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='titulo' type='text' value='$row[titulo]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Categoria</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<select name='categoria' class='form-control'>";

                                        //listar opcao selecionada
                                        while ($retornocategoriaselecionada = mysqli_fetch_array($resultcategoriaselecionada)){
                                            echo "<option style='background-color: #263238; color: #fff' selected value='$retornocategoriaselecionada[acid]'>$retornocategoriaselecionada[accategoria]</option>";
                                        }
                                        //listar opcao selecionada

                                        //listar todas as opcoes
                                        while ($retornocategoria = mysqli_fetch_array($resultcategorias)){
                                            echo "<option value='$retornocategoria[id]'>$retornocategoria[categoria]</option>";
                                        }
                                        //listar todas as opcoes

                                        echo "</select>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Telefone</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='telefone' type='text' value='$row[telefone]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Logradouro</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='logradouro' type='text' value='$row[logradouro]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Numero</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='numero' type='text' value='$row[numero]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Bairro</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='bairro' type='text' value='$row[bairro]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Complemento</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='complemento' type='text' value='$row[complemento]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Cep</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='cep' type='text' value='$row[cep]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Data de nascimento</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='datanascimento' type='date' value='$row[datanascimento]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Cidade</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='cidade' type='text' value='$row[cidade]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Estado</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='estado' type='text' value='$row[estado]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";
                                        
                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Divulgar endereço</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<select name='divulgaendereco' class='form-control'>";
                                       echo "<option value='sim'>Sim</option>";
                                       echo "<option value='nao'>Não</option>";
                                        echo "</select>";
                                        
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Plano</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<select name='plano' class='form-control'>";

                                        //listar opcao selecionada
                                        while ($retornoplanoselecionado = mysqli_fetch_array($resultplanoselecionado)){
                                            echo "<option style='background-color: #263238; color: #fff' selected value='$retornoplanoselecionado[pid]'>$retornoplanoselecionado[ptitulo]</option>";
                                        }
                                        //listar opcao selecionada

                                        //listar todas as opcoes
                                        while ($retornoplanos = mysqli_fetch_array($resultplanos)){
                                            echo "<option value='$retornoplanos[id]'>$retornoplanos[titulo]</option>";
                                        }
                                        //listar todas as opcoes

                                        echo "</select>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<input type='hidden' value='$row[inicioplano]' name='inicioplano'>";

                                        echo "<input type='hidden' value='$row[fimplano]' name='fimplano'>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Whatsapp</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='whatsapp' type='text' value='$row[whatsapp]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>E-mail</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='email' type='text' value='$row[email]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Facebook</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='facebook' type='text' value='$row[facebook]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Instagram</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='instagram' type='text' value='$row[instagram]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Linkedin</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='linkedin' type='text' value='$row[linkedin]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Descrição</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<textarea class='form-control' name='descricao'>$row[descricao]</textarea>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Senha</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='senha' type='text' value='$row[senha]' id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";


                                        echo "<input type='hidden' value='$row[imagem]' name='imagem'>";
                                        echo "<input type='hidden' value='$row[video]' name='video'>";
                                        echo "<input type='hidden' value='$row[status]' name='status'>";


                                    }
                                    mysqli_close($conn);
                                    ?>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button style="float: right" type='submit' class='btn btn-info'>Atualizar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div>
    </div>
    <?php include 'includes/rodape.php' ?>
</div>
</div>
<?php include 'includes/scriptsrodape.php' ?>
</body>
</html>