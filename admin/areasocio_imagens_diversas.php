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
                        <li>Imagens diversas</li>
                    </ul>
                </div>
                <h1>Insira as melhores fotos dos seus serviços</h1>

            </div>
            <form class="card-body" action="functions/areasocio_imagens_diversas.php"
                  enctype="multipart/form-data"
                  method="post">

                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="step first">
                            <h3>Imagem - 570px x 400px</h3>

                            <div class="tab-content checkout">
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">

                                    <?php
                                    require("admin/connections/conn.php");
                                    $pegaid = (int)$_GET['id'];
                                    echo "<input type='hidden' name='id' value='$pegaid'>";
                                    echo "<input type='hidden' name='anunciante' value='$pegaid'>";
                                    $sql = "select * FROM anunciantes_fotos where anunciante = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        if ($row['imagem'] == '') {
                                            echo "<img src='admin/assets/images/imagem-cadastrada.png' class='img-fluid'>";
                                            echo "<br/><br/>";
                                        } else {

                                            echo "<div style='margin-top:30px;margin-bottom:30px; float: left' class='col-4'>";
                                            echo "<img style='height:215px; width: 100%' src='admin/uploads/anunciantes_fotos/$row[imagem]' class='img-fluid'>";
                                            echo "<a href='functions/areasocio_imagens_diversas_excluir.php?id=$row[id]'><img style='width: 30px; margin-top: 10px;'  src='admin/assets/images/delete.png'></a>";
                                            echo "</div>";
                                        }
                                    }
                                    mysqli_close($conn);
                                    ?>

                                    <div style="margin-top: 30px" class="m-b-30">
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


                    <button style="float: right" type='submit' class='btn_1 full-width'>Adicionar</button>

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