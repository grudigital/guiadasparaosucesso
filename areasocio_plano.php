<?php
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
                        <li><a href="areasocio.php">Área do sócio</a></li>
                        <li>Informações do plano</li>
                    </ul>
                </div>
                <h1>Visualize as informações relacionadas a seu plano</h1>

            </div>
            <form class="card-body" action="functions/areasocio_contato_plano.php"
                  enctype="multipart/form-data"
                  method="post">

                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="step first">
                            <h3>Informações de plano atual</h3>

                            <div class="tab-content checkout">
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel"
                                     aria-labelledby="tab_1">

                                    <?php
                                    require("admin/connections/conn.php");
                                    $pegaid = $_SESSION['usuarioId'];
                                    $sql = "select a.id aid, a.inicioplano anicioplano, a.fimplano afimplano, a.plano aplano, p.id pid, p.titulo ptitulo, p.valor pvalor, p.descricao pdescricao from anunciantes as a inner join planos as p on a.plano = p.id and a.id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<input class='form-control' name='id' type='hidden' value='$row[id]'
                                                   id='example-text-input'>";

                                        echo "<p style='font-weight: bold; font-size:25px'> $row[ptitulo]</p>";
                                        echo "<span style='font-size:18px; margin-top: 20px'> $row[pdescricao]</span>";
                                        echo "<p style='font-size:20px; margin-top: 20px'> Início do plano: $row[anicioplano]</p>";
                                        echo "<p style='font-size:20px; margin-top: 20px'> Fim do plano: $row[afimplano]</p>";


                                    }
                                    mysqli_close($conn);
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="step last">




                            <h3>Mudar plano? Entre em contato</h3>
                            <div class="tab-content checkout">
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel"
                                     aria-labelledby="tab_1">


                                    <?php
                                    require("admin/connections/conn.php");
                                    $pegaid = $_SESSION['usuarioId'];
                                    $sql = "select * from anunciantes where id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<input type='hidden' name='nome' value='$row[titulo]'>";
                                        echo "<input type='hidden' name='telefone' value='$row[telefone]'>";
                                        echo "<input type='hidden' name='email' value='$row[email]'>";
                                        echo "<input type='hidden' name='status' value='2'>";
                                        echo "<input type='hidden' name='mensagem' value='Quero mudar meu plano.'>";

                                        echo "<div class='form-group'>";
                                        echo "<p style='margin-bottom: 2px'>Seu código:</p>";
                                        echo "<input type='text' name='id' readonly value='$row[id]' class='form-control'>";
                                        echo "</div>";
                                    }
                                    mysqli_close($conn);
                                    ?>

                                    <button style="float: right" type='submit' class='btn_1 full-width'>Solicitar
                                        contato
                                    </button>

                                </div>

                            </div>
            </form>

        </div>

        <!-- /step -->
</div>

</div>

</div>
<!-- /container -->
</main>
<!--/main-->

<?php include 'includes/footer.php'; ?>

</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->
<!-- Modal Payments Method-->
<div class="modal fade" id="payments_method" tabindex="-1" role="dialog" aria-labelledby="payments_method_title"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="payments_method_title">Payments Methods</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, oratio possim ius cu. Labore prompta nominavi sea ei. Sea no animal
                    saperet gloriatur, ius iusto ullamcorper ad. Qui ignota reformidans ei, vix in elit conceptam
                    adipiscing, quaestio repudiandae delicatissimi vis ei. Fabulas accusamus no has.</p>
                <p>Et nam vidit zril, pri elaboraret suscipiantur ut. Duo mucius gloriatur at, in vis integre labitur
                    dolores, mei omnis utinam labitur id. An eum prodesset appellantur. Ut alia nemore mei, at velit
                    veniam vix, nonumy propriae conclusionemque ea cum.</p>
            </div>
        </div>
    </div>
</div>

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>

<script>
    // Other address Panel
    $('#other_addr input').on("change", function () {
        if (this.checked)
            $('#other_addr_c').fadeIn('fast');
        else
            $('#other_addr_c').fadeOut('fast');
    });
</script>

</body>
</html>