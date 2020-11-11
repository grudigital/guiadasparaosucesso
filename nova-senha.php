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
                <h1>Recuperação de senha</h1>
            </div>
            <!-- /page_header -->
            <div style="margin-bottom: 30px" class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                        <h3 class="client">Nova senha</h3>
                        <h5 class="client">Insira sua nova senha para acesso a plataforma GPS.</h5>
                        <div style="margin-top: 33px;" class="form_container">
                            <form action="functions/atualizar-senha.php" enctype="multipart/form-data"
                                  method="post">
                                <?php
                                require("admin/connections/conn.php");

                                $pegaid = (int)$_GET['id'];
                                $sql = "select * FROM anunciantes where id = '$pegaid'";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<div class='form-group'>";
                                    echo "<input type='hidden' name='id' value='$pegaid'>";
                                    echo "<input type='password' class='form-control' name='senha' id='senha' placeholder='Nova senha de acesso'>";
                                    echo "</div>";
                                    echo "<div class='text-center'><input type='submit' value='Salvar nova senha' class='btn_1 full-width'></div>";
                                }
                                mysqli_close($conn);
                                ?>


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