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
                            <h3 class="page-title">Painel de gerenciamento :: Estabelecimentos :: Editar</h3>
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
                                <form class="card-body" action="functions/estabelecimentos_editar.php"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Estabelecimentos</h4>
                                                <p class="text-muted m-b-30 font-14">Editar estabelecimento</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");
                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select * FROM estabelecimentos where id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);



                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<input name='id' type='hidden' value='$row[id]'>";
                                        echo "<input name='imagem' type='hidden' value='$row[imagem]'>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Título</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='titulo' type='text' value='$row[titulo]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Descrição</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<textarea class='form-control' id='resumo' name='descricao'>$row[descricao]</textarea>";
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
                                        echo "<input class='form-control' name='numero' type='number' value='$row[numero]'
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
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Bairro</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='bairro' type='text' value='$row[bairro]'
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
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Telefone</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='telefone' type='text' value='$row[telefone]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Site</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='site' type='text' value='$row[site]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

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