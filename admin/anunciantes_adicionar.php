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
                            <h3 class="page-title">Painel de gerenciamento :: Anunciantes :: Adicionar</h3>
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
                                <form class="card-body" action="functions/anunciantes_adicionar.php" enctype="multipart/form-data"
                                      method="post">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="mt-0 header-title">Anunciantes</h4>
                                                <p class="text-muted m-b-30 font-14">Adicionar anunciante</p>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-2">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Título</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="titulo" type="text" placeholder="Título"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Categoria</label>
                                        <div class="col-sm-10">
                                            <select name="categoria" class="form-control">
                                                <?php
                                                require("connections/conn.php");
                                                $sql = "select * FROM anunciantes_categoria";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='$row[id]'>$row[categoria]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Telefone</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="telefone" type="text" placeholder="Telefone"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Logradouro</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="logradouro" type="text" placeholder="Logradouro"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Numero</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="numero" type="text" placeholder="Numero"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Bairro</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="bairro" type="text" placeholder="Bairro"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Cidade</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="cidade" type="text" placeholder="Cidade"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Estado</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="estado" type="text" placeholder="Estado"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Inicio do plano</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="inicioplano" type="date" placeholder="Inicio do plano"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Fim do plano</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="fimplano" type="date" placeholder="Fim do plano"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Whatsapp</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="whatsapp" type="text" placeholder="Whatsapp"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">E-mail</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="email" type="text" placeholder="E-mail"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Facebook</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="facebook" type="text" placeholder="Facebook"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Instagram</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="instagram" type="text" placeholder="Instagram"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Descrição</label>
                                        <div class="col-sm-10">
                                            <textarea placeholder="Descrição" name="descricao" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Senha</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="senha" type="text" placeholder="Senha"
                                                   id="example-text-input">
                                        </div>
                                    </div>

                                    <input type="hidden" value="2" name="status">

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button style="float: right" type='submit' class='btn btn-info'>Adicionar
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