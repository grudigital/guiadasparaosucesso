<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: login.php");
}
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
                        <li>Página principal</li>
                    </ul>
                </div>
                <h1>Area do sócio</h1>
            </div>
            <!-- /page_header -->


            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="areasocio_informacoes.php">
                        <i class="ti-user"></i>
                        <h3>Informações de conta</h3>
                        <p>Controle aqui os dados da sua conta.</p>
                    </a>
                </div>


                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="areasocio_plano.php">
                        <i class="ti-wallet"></i>
                        <h3>Informações do plano</h3>
                        <p>Visualize aqui seu plano de acesso a plataforma.</p>
                    </a>
                </div>

<!--                <div class="col-lg-4 col-md-6">-->
<!--                    <a class="box_topic" href="#0">-->
<!--                        <i class="ti-star"></i>-->
<!--                        <h3>Destaque</h3>-->
<!--                        <p>Dê maior visibilidade aos seus serviços.</p>-->
<!--                    </a>-->
<!--                </div>-->


                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="areasocio_logotipo.php">
                        <i class="ti-palette"></i>
                        <h3>Logotipo</h3>
                        <p>Sua marca dentro do portal GPS.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="areasocio_imagem_principal.php">
                        <i class="ti-image"></i>
                        <h3>Imagem principal</h3>
                        <p>A primeira imagem que seus clientes veram.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="areasocio_imagens_diversas.php">
                        <i class="ti-gallery"></i>
                        <h3>Imagens diversas</h3>
                        <p>Insira as melhores fotos dos seus serviços.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="areasocio_video.php">
                        <i class="ti-video-clapper"></i>
                        <h3>Vídeo</h3>
                        <p>Insira um vídeo que mostre bem seus talentos.</p>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="areasocio_comentarios.php">
                        <i class="ti-comments"></i>
                        <h3>Comentários</h3>
                        <p>O que dizem sobre seu trabalho no GPS.</p>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_topic" href="areasocio_orcamentos.php">
                        <i class="ti-email"></i>
                        <h3>Orçamentos</h3>
                        <p>Visualize as mensagens de seus futuros clientes.</p>
                    </a>
                </div>

            </div>
            <!--/row-->
        </div>

    </main>
    <!--/main-->

    <?php include 'includes/footer.php'; ?>

</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>


</body>
</html>