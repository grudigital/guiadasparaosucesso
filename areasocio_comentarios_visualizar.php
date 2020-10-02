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
                        <li>Comentários de clientes</li>
                    </ul>
                </div>
                <h1>O que dizem sobre meu trabalho no GPS</h1>

            </div>
            <form class="card-body" action="functions/areasocio_informacoes_atualizar.php"
                  enctype="multipart/form-data"
                  method="post">

                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="step first">
                            <h3>Comentários pelo site</h3>
                            <div class="tab-content checkout">
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                                    <?php
                                    require("admin/connections/conn.php");
                                    $pegaid = (int)$_GET['id'];
                                    $sql = "select ac.id acid,ac.anunciante acanunciante,ac.nome acnome,ac.cpf accpf,ac.email acemail,ac.telefone actelefone,ac.comentario accomentario,ac.status acstatus, a.id aid, a.titulo atitulo FROM anunciantes_comentarios as ac inner join anunciantes as a on ac.anunciante = a.id where ac.id = '$pegaid'";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<input class='form-control' name='id' type='hidden' value='$row[acid]'
                                                   id='example-text-input'>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Nome</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top: 5px'>$row[acnome]</p>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>CPF</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top: 5px'>$row[accpf]</p>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Email</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top: 5px'>$row[acemail]</p>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Telefone</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top: 5px'>$row[actelefone]</p>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "<div class='form-group row'>";
                                        echo "<label for='example-text-input' class='col-sm-2 col-form-label'>Comentário</label>";
                                        echo "<div class='col-sm-10'>";
                                        echo "<p style='margin-top: 5px'>$row[accomentario]</p>";
                                        echo "</div>";
                                        echo "</div>";



                                    }
                                    mysqli_close($conn);
                                    ?>                                </div>
                            </div>
                        </div>
                    </div>



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