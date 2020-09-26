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
                            <h3 class="page-title">Painel de gerenciamento :: Categorias :: Destaques :: Editar</h3>
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
                                <form class="card-body" action="functions/categorias_destaques_editar.php"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Categorias</h4>
                                                <p class="text-muted m-b-30 font-14">Editar destaque de categoria</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    require("connections/conn.php");
                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select id,local,medidas,categoria,imagem FROM categorias_destaques where id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<input class='form-control' name='id' type='hidden' value='$row[id]'
                                                   id='example-text-input'>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Local</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='local' readonly type='text' value='$row[local]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Medidas</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<input class='form-control' name='medidas' readonly type='text' value='$row[medidas]'
                                                   id='example-text-input'>";
                                        echo "</div>";
                                        echo "</div>";


                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Categoria</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<select name='categoria' class='form-control'>";

                                        //listar categoria selecionada
                                        $pegaid3 = (int)$_GET['id'];
                                        $sql3 = "select cd.id cdid, cd.categoria cdcategoria, ac.id acid, ac.categoria accategoria from categorias_destaques as cd inner join anunciantes_categoria as ac on cd.categoria = ac.id where cd.id = '$pegaid'";
                                        $result3 = mysqli_query($conn, $sql3);
                                        while ($row3 = mysqli_fetch_assoc($result3)) {
                                            echo "<option selected value='$row3[acid]'>$row3[accategoria]</option>";
                                        }
                                        //listar categoria selecionada


                                        //listar todas as categorias

                                        $sql2 = "select * FROM anunciantes_categoria";
                                        $result2 = mysqli_query($conn, $sql2);
                                        while ($row2 = mysqli_fetch_assoc($result2)) {
                                            echo "<option value='$row2[id]'>$row2[categoria]</option>";
                                        }


                                        //listar todas as categorias

                                        echo "</select>";
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