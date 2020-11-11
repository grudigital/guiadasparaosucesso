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
                        <li>Login</li>
                    </ul>
                </div>
                <h1>Esqueci minha senha</h1>
            </div>
            <!-- /page_header -->
            <div style="margin-bottom: 30px" class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                        <h3 class="client">Insira seu e-mail</h3>
                        <h5 class="client">Enviaremos por e-mail um link para alteração da sua senha.</h5>
                        <div style="margin-top: 33px;" class="form_container">
                            <form action="functions/esqueci-senha.php" enctype="multipart/form-data"
                                  method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail de cadastro*">
                                </div>

                                <div class="text-center"><input type="submit" value="Enviar senha por e-mail" class="btn_1 full-width"></div>
                            </form>
                        </div>
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