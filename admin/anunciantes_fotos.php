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
                            <h3 class="page-title">Painel de gerenciamento :: Anunciantes :: Imagens do anúncio</h3>
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
                                <form class="card-body" action="functions/anunciantes_imagens.php"
                                      enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Anunciantes</h4>
                                                <p class="text-muted m-b-30 font-14">Editar fotos do anunciante</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-12">
                                        <div class='container'>
                                            <div class='row'>

                                        <?php
                                        require("connections/conn.php");
                                        $pegaid = (int)$_GET['id'];
                                        echo "<input type='hidden' name='id' value='$pegaid'>";
                                        echo "<input type='hidden' name='anunciante' value='$pegaid'>";
                                        $sql = "select * FROM anunciantes_fotos where anunciante = '$pegaid'";
                                        $result = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            if ($row['imagem'] == '') {
                                                echo "<img src='assets/images/imagem-cadastrada.png' class='img-fluid'>";
                                                echo "<br/><br/>";
                                            } else {






                                                echo "<div style='margin-top:20px' class='col-4'>";
                                                echo "<img style='height:215px' src='uploads/anunciantes_fotos/$row[imagem]' class='img-fluid'>";
                                                echo "<a href='functions/anunciantes_imagens_excluir.php?id=$row[id]'><img style='width: 30px; margin-top: 10px' src='assets/images/delete.png'></a>";
                                                echo "</div>";





                                            }
                                        }
                                        mysqli_close($conn);
                                        ?>
                                            </div>
                                        </div>

                                        <div style="margin-top:40px" class="m-b-30">
                                            <form action="#" class="dropzone">
                                                <div class="fallback">
                                                    <input name="arquivo" type="file" multiple="multiple">
                                                </div>
                                            </form>
                                        </div>


                                        <div  class="form-group row">
                                            <div class="col-sm-12">
                                                <button style="float: right" type='submit' class='btn btn-info'>
                                                    Adicionar
                                                    imagem
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