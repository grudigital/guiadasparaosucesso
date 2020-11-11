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
            <div style="margin-bottom: 60px" class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="box_account">
                        <div style='background-color:#653C7D; text-align:center; padding-top:15px; border-radius:5px; height:60px;  font-size:20px; color: #fff; font-weight:bold; width:100%' class="alert alert-primary" role="alert">
 Você solicitou a recuperação de senha. Um link foi enviado para seu e-mail. 
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