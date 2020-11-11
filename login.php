<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
if ($_SESSION['usuarioNome'] == '')
?>
<!DOCTYPE html>
<html lang="pt-BR">

<?php include 'includes/head.php'; ?>


<body>

<div id="page">

    <?php include 'includes/header.php'; ?>

    <main class="bg_gray">

        <div class="container margin_30">
            <div class="page_header">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="areasocio.php">Area do sócio</a></li>
                        <li>Acesso ao sócio</li>
                    </ul>
                </div>
                <h1>Fazer login ou novo cadastro</h1>
            </div>
            <!-- /page_header -->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                        <h3 class="client">Já sou sócio</h3>
                        <div style="margin-top: 33px;" class="form_container">
                            <form action="functions/validasocio.php" enctype="multipart/form-data"
                                  method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail*">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="senha" id="password_in"
                                       placeholder="Senha*">
                            </div>
                            
                            <div class="form-group">
                                    <p style="float: right"><a href="esqueci-senha.php">Esqueci minha senha</a></p>
                                </div>

                            <div class="text-center"><input type="submit" value="Entrar" class="btn_1 full-width"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                        <form action="functions/assinantes_adicionar.php" enctype="multipart/form-data"
                              method="post">
                            <h3 class="new_client">Quero ser sócio</h3> <small class="float-right pt-2">* Campos
                                obrigatórios</small>
                            <div class="form_container">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email_2"
                                           placeholder="E-mail*">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="senha" id="password_in_2"
                                           placeholder="Senha*">
                                </div>
                                <hr>

                                <div class="private box">
                                    <div class="row no-gutters">
                                        <div class="col-8 pr-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="titulo"
                                                       placeholder="Título/Nome*">
                                            </div>
                                        </div>
                                        <div class="col-4 pr-1">
                                            <div class="form-group">
                                                <div class="custom-select-form">
                                                    <select class="wide add_bottom_10" name="categoria" id="country">
                                                        <option value="" selected>Categoria*</option>
                                                        <?php
                                                        require("admin/connections/conn.php");
                                                        $sql = "select * FROM anunciantes_categoria";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo "<option value='$row[id]'>$row[categoria]</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 pr-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="logradouro"
                                                       placeholder="Logradouro*">
                                            </div>
                                        </div>
                                        <div class="col-2 pr-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="numero"
                                                       placeholder="Número*">
                                            </div>
                                        </div>
                                        <div class="col-4 pr-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="bairro"
                                                       placeholder="Bairro*">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row no-gutters">
                                        <div class="col-6 pr-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="cidade"
                                                       placeholder="Cidade*">
                                            </div>
                                        </div>
                                        <div class="col-6 pl-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="estado"
                                                       placeholder="Estado*">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row no-gutters">
                                        <div class="col-6 pl-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="telefone"
                                                       placeholder="Telefone">
                                            </div>
                                        </div>
                                        <div class="col-6 pl-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="whatsapp"
                                                       placeholder="Whatsapp *">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                <input type="hidden" name="status" value="2">


                                    <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" required class="form-check-input" id="materialUnchecked">
                                        <label class="form-check-label" for="materialUnchecked">Aceito os termos de <a target="_blank" href="termos-de-uso.php">uso</a> e <a target="_blank" href="politica-de-privacidade.php">privacidade</a>.</label>
                                    </div>
                                    </div>












                                </div>

                                <div class="text-center"><input type="submit" value="Processar cadastro"
                                                                class="btn_1 full-width"></div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->

    <?php include 'includes/footer.php'; ?>

</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>

<script>
    // Client type Panel
    $('input[name="client_type"]').on("click", function () {
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
</script>

</body>
</html>