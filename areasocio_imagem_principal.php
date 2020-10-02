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
                        <li>Imagem principal</li>
                    </ul>
                </div>
                <h1>A primeira imagem que seus clientes veram</h1>

            </div>
            <form class="card-body" action="functions/areasocio_imagem_principal.php"
                  enctype="multipart/form-data"
                  method="post">

                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="step first">
                            <h3>Imagem principal - 600px x 400px</h3>

                            <div class="tab-content checkout">
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">

                                    <?php
                                    require ("admin/connections/conn.php");

                                    $pegaid = $_SESSION['usuarioId'];
                                    $sql = "select * FROM anunciantes where id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while($row = mysqli_fetch_assoc($result)) {
                                        if ($row['logotipo'] == '') {
                                            echo "<img src='admin/assets/images/imagem-cadastrada.png' class='img-fluid'>";
                                            echo "<input type='hidden' name='id' value='$row[id]'>";
                                            echo "<br/><br/>";
                                        }
                                        else
                                        {
                                            echo "<img src='admin/uploads/anunciantes/$row[imagem]' class='img-fluid'>";
                                            echo "<input type='hidden' name='id' value='$row[id]'>";
                                            echo "<br/><br/>";
                                        }
                                    }
                                    mysqli_close($conn);
                                    ?>

                                    <div class="m-b-30">
                                        <form action="#" class="dropzone">
                                            <div class="fallback">
                                                <input class='form-control' name="arquivo" type="file" multiple="multiple">
                                            </div>
                                        </form>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>


                    <button style="float: right" type='submit' class='btn_1 full-width'>Atualizar</button>

                </div>
            </form>
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