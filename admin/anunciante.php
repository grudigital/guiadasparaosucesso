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
    <main>
        <div class="container margin_30">
            <div class="row">
                <div class="col-lg-6 magnific-gallery">

                    <?php
                    require("admin/connections/conn.php");
                    $pegaid = (int)$_GET['id'];

                    $sql = "select a.id aid, a.titulo atitulo,a.categoria acategoria, a.telefone atelefone, a.logradouro alogradouro, a.numero anumero, a.bairro abairro, a.cidade acidade, a.estado aestado, a.inicioplano ainicioplano, a.fimplano afimplano, a.whatsapp awhatsapp, a.email aemail, a.facebook afacebook, a.instagram ainstagram, a.descricao adescricao, a.senha asenha, a.imagem aimagem, a.video avideo, a.status astatus, a.datacadastro adatacadastro, ac.id acid, ac.categoria accategoria, ac.imagem acimagem FROM anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id  where a.id = '$pegaid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<p>";
                        if ($row['aimagem'] == null or $row['aimagem'] == '') {
                            echo "<a href='images/sem-foto.png' title='$row[atitulo]' data-effect='mfp-zoom-in'><img
                                    src='images/sem-foto.png' height='390' width='580' alt='' class='img-fluid'></a>";
                        } else {
                            echo "<a href='admin/uploads/anunciantes/$row[aimagem]' title='$row[atitulo]' data-effect='mfp-zoom-in'><img
                                    src='admin/uploads/anunciantes/$row[aimagem]' height='390' width='580' alt='' class='img-fluid'></a>";
                        }
                        echo "</p>";
                    }
                    ?>

                </div>
                <div class="col-lg-6" id="sidebar_fixed">

                    <?php
                    require("admin/connections/conn.php");
                    $pegaid = (int)$_GET['id'];

                    $sql = "select a.id aid, a.titulo atitulo,a.categoria acategoria, a.telefone atelefone, a.logradouro alogradouro, a.numero anumero, a.bairro abairro, a.complemento acomplemento, a.cep acep, a.cidade acidade, a.estado aestado, a.inicioplano ainicioplano, a.fimplano afimplano, a.whatsapp awhatsapp, a.email aemail, a.facebook afacebook, a.instagram ainstagram, a.descricao adescricao, a.senha asenha, a.imagem aimagem, a.video avideo, a.status astatus, a.datacadastro adatacadastro, ac.id acid, ac.categoria accategoria, ac.imagem acimagem FROM anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id  where a.id = '$pegaid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<div class='breadcrumbs'>";
                        echo "<ul>";
                        echo "<li><a href='index.php'>Home</a></li>";
                        echo "<li><a href='categoria.php?id=$row[acid]'>$row[accategoria]</a></li>";
                        echo "<li>$row[atitulo]</li>";
                        echo "</ul>";
                        echo "</div>";

                    }
                    ?>

                    <?php
                    require("admin/connections/conn.php");
                    $pegaid = (int)$_GET['id'];

                    $sql = "select a.id aid, a.titulo atitulo,a.linkedin alinkedin,a.categoria acategoria,a.logotipo alogotipo, a.telefone atelefone,a.divulgaendereco adivulgaendereco, a.logradouro alogradouro, a.numero anumero, a.bairro abairro, a.cidade acidade, a.estado aestado, a.inicioplano ainicioplano, a.fimplano afimplano, a.whatsapp awhatsapp, a.email aemail, a.facebook afacebook, a.instagram ainstagram, a.descricao adescricao, a.senha asenha, a.imagem aimagem, a.video avideo, a.status astatus, a.datacadastro adatacadastro, ac.id acid, ac.categoria accategoria, ac.imagem acimagem FROM anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id  where a.id = '$pegaid'";
                    $result = mysqli_query($conn, $sql);

                    $sqlcontagemavaliacoes = "select * from anunciantes_comentarios where anunciante = '$pegaid'";
                    $executacontagemavaliacoes = mysqli_query($conn, $sqlcontagemavaliacoes);
                    $resultcontagemavaliacoes = mysqli_num_rows($executacontagemavaliacoes);

                    $resultado = mysqli_query($conn, "SELECT AVG(estrelas) FROM anunciantes_comentarios where anunciante = '$pegaid' group by anunciante");
                    $linhas = mysqli_num_rows($resultado);

                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<div class='prod_info'>";
                        echo "<h1>$row[atitulo]</h1>";

                        //sistema dinâmico de calculo de estrelas em avaliações


                        while ($linhas = mysqli_fetch_array($resultado)) {

                            if ($linhas['AVG(estrelas)'] <= '1.0000') {
                                echo "<img style='height:18px' src='img/0estrelas.png'>";
                            } else if ($linhas['AVG(estrelas)'] >= '1.0001' && $linhas['AVG(estrelas)'] <= '1.9999') {
                                echo "<img style='height:18px' src='img/1estrela0.png'>";
                            } else if ($linhas['AVG(estrelas)'] >= '2.0000' && $linhas['AVG(estrelas)'] <= '2.9999') {
                                echo "<img style='height:18px' src='img/2estrelas.png'>";
                            } else if ($linhas['AVG(estrelas)'] >= '3.0000' && $linhas['AVG(estrelas)'] <= '3.9999') {
                                echo "<img style='height:18px' src='img/3estrelas.png'>";
                            } else if ($linhas['AVG(estrelas)'] >= '4.0000' && $linhas['AVG(estrelas)'] <= '4.9998') {
                                echo "<img style='height:18px' src='img/4estrelas.png'>";
                            } else if ($linhas['AVG(estrelas)'] >= '4.9999') {
                                echo "<img style='height:18px' src='img/5estrelas.png'>";
                            }

                        }

                        echo "<span style='margin-bottom: 30px;  margin-left:10px' class='rating'><em>$resultcontagemavaliacoes avaliações</em></span>";

                        //sistema dinâmico de calculo de estrelas em avaliações

                        if ($row['alogotipo'] == '') {

                        } else {
                            echo "<div style='margin-bottom:30px; padding-top:10px; padding-bottom:10px;max-width: 300px;'><img style='height: 90px'; width='240px'  src='admin/uploads/logotipos/$row[alogotipo]'></div>";
                        }

                        if ($row['atelefone'] != null) {
                            echo "<p><strong><img width='25px' src='img/icone-telefone2.png'></strong><span style='margin-left:5px'> $row[atelefone]</span></p>";
                        }

                        if ($row['aemail'] != null) {
                            echo "<p><strong><img width='25px' src='img/icone-email.png'></strong> <a style='color:#444; text-decoration: none;margin-left:5px' href='mailto:$row[aemail]' target='_blank'>$row[aemail]</a></p>";
                        }

                        if ($row['adivulgaendereco'] == 'sim') {
                            if ($row['alogradouro'] != null or $row['abairro'] != null or $row['acidade'] != null or $row['aestado'] != null) {
                                echo "<p><strong><img width='25px' src='img/icone-endereco2.png'></strong><span style='color:#444;margin-left:8px;text-decoration: none'>";
                            }

                            if ($row['alogradouro'] != null) {
                                echo "$row[alogradouro]";
                            }
                            if ($row['anumero'] != null && $row['alogradouro'] != null) {
                                echo ", $row[anumero] ";
                            }
                            if ($row['abairro'] != null) {
                                echo "- $row[abairro] ";
                            }
                            if ($row['acomplemento'] != null) {
                                echo "- $row[acomplemento]";
                            }
                            if ($row['acep'] != null) {
                                echo "- $row[acep] ";
                            }
                            if ($row['acidade'] != null) {
                                echo "- $row[acidade]";
                            }
                            if ($row['aestado'] != null) {
                                echo " / $row[aestado]";
                            }

                            echo "</span> </p>";
                        }
                        if ($row['afacebook'] != null) {
                            echo "<a style='color:#444;text-decoration: none' href='$row[afacebook]' target='_blank'><img width='25px' src='img/icone-facebook2.png'></strong></a>";
                        }
                        if ($row['ainstagram'] != null) {
                            echo "<a style='color:#444;margin-left:10px;text-decoration: none' href='$row[ainstagram]' target='_blank'><img width='25px' src='img/icone-instagram2.png'></strong></a>";
                        }
                        if ($row['alinkedin'] != null) {
                            echo "<a style='color:#444;margin-left:10px;text-decoration: none' href='$row[alinkedin]' target='_blank'><img width='25px' src='img/icone-linkedin2.png'></strong></a>";
                        }


                    }
                    ?>


                </div>
            </div>
        </div>

        <div class="container margin_60_35">
            <div class="owl-carousel owl-theme products_carousel">


                <?php
                require("admin/connections/conn.php");
                $pegaid = (int)$_GET['id'];
                $sql = "select id, anunciante, imagem from anunciantes_fotos where anunciante = '$pegaid' ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='item'>";
                    echo "<div class='grid_item'>";
                    echo "<figure>";

                    echo "<a target='_blank' data-lightbox='image-1' href='admin/uploads/anunciantes_fotos/$row[imagem]'>";
                    echo "<img style='height:200px' class='owl-lazy' src='admin/uploads/anunciantes_fotos/$row[imagem]' data-src='admin/uploads/anunciantes_fotos/$row[imagem]' alt=''>";
                    echo "</a>";


                    echo "</figure>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>


            </div>
        </div>


        <form action="functions/orcamento_adicionar.php" enctype="multipart/form-data" method="post">

            <?php
            require("admin/connections/conn.php");
            $pegaid = (int)$_GET['id'];

            $sql = "select a.id aid, a.titulo atitulo,a.categoria acategoria,a.logotipo alogotipo, a.telefone atelefone, a.logradouro alogradouro, a.numero anumero, a.bairro abairro, a.cidade acidade, a.estado aestado, a.inicioplano ainicioplano, a.fimplano afimplano, a.whatsapp awhatsapp, a.email aemail, a.facebook afacebook, a.instagram ainstagram, a.descricao adescricao, a.senha asenha, a.imagem aimagem, a.video avideo, a.status astatus, a.datacadastro adatacadastro, ac.id acid, ac.categoria accategoria, ac.imagem acimagem FROM anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id  where a.id = '$pegaid'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<div class='prod_options'>";
                echo "<p style='margin-bottom: 30px; font-size:20px;'>Orçamento rápido</p>";

                echo "<input type='hidden' name='anunciante' value='$pegaid'>";


                echo "<div class='row'>";
                echo "<label class='col-xl-3 col-lg-3  col-md-3 col-3'><strong>Nome</strong></label>";
                echo "<div class='col-xl-9 col-lg-9 col-md-9 col-9'>";
                echo "<div class='form-group'>";
                echo "<input class='form-control' type='text' name='nome' placeholder='Nome *'>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                echo "<div class='row'>";
                echo "<label class='col-xl-3 col-lg-3  col-md-3 col-3'><strong>E-mail</strong></label>";
                echo "<div class='col-xl-9 col-lg-9 col-md-9 col-9'>";
                echo "<div class='form-group'>";
                echo "<input class='form-control' type='text' name='email' placeholder='E-mail *'>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                echo "<div class='row'>";
                echo "<label class='col-xl-3 col-lg-3  col-md-3 col-3'><strong>Telefone</strong></label>";
                echo "<div class='col-xl-9 col-lg-9 col-md-9 col-9'>";
                echo "<div class='form-group'>";
                echo "<input class='form-control' type='text' name='telefone' placeholder='Telefone *'>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                echo "<div class='row'>";
                echo "<label class='col-xl-3 col-lg-3  col-md-3 col-3'><strong>Mensagem</strong></label>";
                echo "<div class='col-xl-9 col-lg-9 col-md-9 col-9'>";
                echo "<div class='form-group'>";
                echo "<textarea class='form-control' placeholder='Mensagem *' name='mensagem'></textarea>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                echo "</div>";

                echo "<div class='row'>";;
                echo "<div class='col-lg-12 col-md-12'>";
                echo "<div class='btn_add_to_cart'><input class='btn_1 full-width' type='submit' value='Solicitar contato'></div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

            }
            ?>

            <div class="tabs_product">
                <div class="container">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab"
                               role="tab">Descrição</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Avaliações</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /tabs_product -->
            <div class="tab_content_wrapper">
                <div class="container">
                    <div class="tab-content" role="tablist">
                        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                            <div class="card-header" role="tab" id="heading-A">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="false"
                                       aria-controls="collapse-A">
                                        Descrição
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                                <div class="card-body">
                                    <div class="row">

                                        <?php
                                        require("admin/connections/conn.php");
                                        $pegaid = (int)$_GET['id'];

                                        $sql = "select a.id aid, a.titulo atitulo,a.categoria acategoria, a.telefone atelefone, a.logradouro alogradouro, a.numero anumero, a.bairro abairro, a.cidade acidade, a.estado aestado, a.inicioplano ainicioplano, a.fimplano afimplano, a.whatsapp awhatsapp, a.email aemail, a.facebook afacebook, a.instagram ainstagram, a.descricao adescricao, a.senha asenha, a.imagem aimagem, a.video avideo, a.status astatus, a.datacadastro adatacadastro, ac.id acid, ac.categoria accategoria, ac.imagem acimagem FROM anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id  where a.id = '$pegaid'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            echo "<div class='col-md-6'>";
                                            echo "<h3>Descrição</h3>";
                                            echo "<p>$row[adescricao]</p>";

                                            echo "</div>";
                                            if ($row['avideo'] != null) {
                                                echo "<div class='col-md-6'>";
                                                echo "<h3>Vídeo</h3>";
                                                echo "<div class='table-responsive'>";
                                                echo "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/$row[avideo]\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
                                                echo "</div>";
                                                echo "</div>";
                                            }
                                        }
                                        ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                            <div class="card-header" role="tab" id="heading-B">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false"
                                       aria-controls="collapse-B">
                                        Avaliações
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <?php
                                        require("admin/connections/conn.php");
                                        $pegaid = (int)$_GET['id'];

                                        $sql = "select * FROM anunciantes_comentarios where anunciante = '$pegaid' and status = 1";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {

                                            echo "<div class='col-lg-6'>";
                                            echo "<div class='review_content'>";
                                            echo "<h4>'$row[nome]'</h4>";
                                            echo "<p>$row[comentario]</p>";
                                            echo "</div>";
                                            echo "</div>";
                                        }
                                        ?>
                                    </div>

                                    <div class="col-lg-5 col-md-6">
                                        <div class="btn_add_to_cart"><a href="#0" class="btn_1 full-width">fazer
                                                avaliação</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Ainda nesta categoria</h2>
                <span>Fornecedores</span>
                <p>Veja o perfil de outros fornecedores para esta categoria.</p>
            </div>


            <div class="owl-carousel owl-theme products_carousel">


                <?php
                require("admin/connections/conn.php");
                $pegaid = (int)$_GET['id'];

                $sql = "select a.id aid, a.titulo atitulo, a.status astatus, a.categoria acategoria, a.imagem aimagem, ac.id acid, ac.categoria accategoria, ac.imagem accimagem from anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id where a.status = 1";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<div class='item'>";
                    echo "<div class='grid_item'>";
                    echo "<figure>";
                    echo "<a href='anunciante.php?id=$row[aid]'>";
                    if ($row['aimagem'] == null or $row['aimagem'] == '') {
                        echo "<img style='height:195px; width:290px' class='owl-lazy' src='images/sem-foto.png' data-src='images/sem-foto.png' alt=''>";
                    } else {
                        echo "<img style='height:195px; width:290px' class='owl-lazy' src='admin/uploads/anunciantes/$row[aimagem]' data-src='admin/uploads/anunciantes/$row[aimagem]' alt=''>";
                    }

                    echo "</a>";
                    echo "</figure>";
                    echo "<a href='anunciante.php?id=$row[aid]'>";
                    echo "<h3>$row[atitulo]</h3>";
                    echo "</a>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>


            </div>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</div>
<div id="toTop"></div>

<div class="top_panel">
    <div class="container header_panel">
        <a href="#0" class="btn_close_top_panel"><i class="ti-close"></i></a>
        <p style='margin-bottom: -20px; margin-left:15px; font-size:20px;'>Avaliar fornecedor</p>
        <hr>
    </div>
    <form action="functions/comentarios_adicionar.php" enctype="multipart/form-data" method="post">

        <?php
        require("admin/connections/conn.php");
        $pegaid = (int)$_GET['id'];

        $sql = "select a.id aid, a.titulo atitulo,a.categoria acategoria,a.logotipo alogotipo, a.telefone atelefone, a.logradouro alogradouro, a.numero anumero, a.bairro abairro, a.cidade acidade, a.estado aestado, a.inicioplano ainicioplano, a.fimplano afimplano, a.whatsapp awhatsapp, a.email aemail, a.facebook afacebook, a.instagram ainstagram, a.descricao adescricao, a.senha asenha, a.imagem aimagem, a.video avideo, a.status astatus, a.datacadastro adatacadastro, ac.id acid, ac.categoria accategoria, ac.imagem acimagem FROM anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id  where a.id = '$pegaid'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<div class='prod_options'>";
            echo "<input type='hidden' name='anunciante' value='$pegaid'>";
            echo "<div class='container'>";
            echo "<div class='row'>";
            echo "<div class='col-sm'>";
            echo "<div class='row'>";
            echo "<label class='col-xl-3 col-lg-3  col-md-3 col-3'><strong>Nome</strong></label>";
            echo "<div class='col-xl-9 col-lg-9 col-md-9 col-9'>";
            echo "<div class='form-group'>";
            echo "<input class='form-control' type='text' name='nome' placeholder='Nome *'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "<div class='col-sm'>";
            echo "<div class='row'>";
            echo "<label class='col-xl-3 col-lg-3  col-md-3 col-3'><strong>E-mail</strong></label>";
            echo "<div class='col-xl-9 col-lg-9 col-md-9 col-9'>";
            echo "<div class='form-group'>";
            echo "<input class='form-control' type='text' name='email' placeholder='E-mail *'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "<div class='col-sm'>";
            echo "<div class='row'>";
            echo "<label class='col-xl-3 col-lg-3  col-md-3 col-3'><strong>Telefone</strong></label>";
            echo "<div class='col-xl-9 col-lg-9 col-md-9 col-9'>";
            echo "<div class='form-group'>";
            echo "<input class='form-control' type='text' name='telefone' placeholder='Telefone *'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";

            echo "<div class='container'>";
            echo "<div class='row'>";
            echo "<div class='col-4'>";
            echo "<div class='row'>";
            echo "<label class='col-xl-3 col-lg-3  col-md-3 col-3'><strong>CPF</strong></label>";
            echo "<div class='col-xl-9 col-lg-9 col-md-9 col-9'>";
            echo "<div class='form-group'>";
            echo "<input class='form-control' type='text' name='cpf' placeholder='CPF *'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";

            echo "<div class='col-4'>";
            echo "<div class='row'>";
            echo "<label class='col-xl-3 col-lg-3  col-md-3 col-3'><strong>Estrelas</strong></label>";
            echo "<div class='col-xl-9 col-lg-9 col-md-9 col-9'>";
            echo "<div class='form-group'>";
            echo "<select class='form-control' name='estrelas'>";
            echo "<option value='selecione'>Escolha uma pontuação</option>";
            echo "<option value='5'>5</option>";
            echo "<option value='4'>4</option>";
            echo "<option value='3'>3</option>";
            echo "<option value='2'>2</option>";
            echo "<option value='1'>1</option>";
            echo "<option value='0'>0</option>";
            echo "</select>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "<div class='col-4'>";
            echo "<div class='row'>";
            echo "<label class='col-xl-3 col-lg-3  col-md-3 col-3'><strong>Mensagem</strong></label>";
            echo "<div class='col-xl-9 col-lg-9 col-md-9 col-9'>";
            echo "<div class='form-group'>";
            echo "<input class='form-control' type='text' name='comentario' placeholder='Mensagem *'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "<input type='hidden' value='2' name='status'>";
            echo "</div>";

            echo "<div class='container'>";
            echo "<div class='row'>";;
            echo "<div class='col-lg-12 col-md-12'>";
            echo "<input class='btn_1 full-width' type='submit' value='Enviar opinião'>";
            echo "</div>";
            echo "</div>";
            echo "</div>";

        }
        ?>

    </form>
</div>
<!-- /related -->
</div>
<!-- /add_cart_panel -->


<!-- Size modal -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="size-modal" id="size-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Size guide</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, et velit propriae invenire mea, ad nam alia intellegat. Aperiam mediocrem
                    rationibus nec te. Tation persecuti accommodare pro te. Vis et augue legere, vel labitur habemus
                    ocurreret ex.</p>
                <div class="table-responsive">
                    <table class="table table-striped table-sm sizes">
                        <tbody>
                        <tr>
                            <th scope="row">US Sizes</th>
                            <td>6</td>
                            <td>6,5</td>
                            <td>7</td>
                            <td>7,5</td>
                            <td>8</td>
                            <td>8,5</td>
                            <td>9</td>
                            <td>9,5</td>
                            <td>10</td>
                            <td>10,5</td>
                        </tr>
                        <tr>
                            <th scope="row">Euro Sizes</th>
                            <td>39</td>
                            <td>39</td>
                            <td>40</td>
                            <td>40-41</td>
                            <td>41</td>
                            <td>41-42</td>
                            <td>42</td>
                            <td>42-43</td>
                            <td>43</td>
                            <td>43-44</td>
                        </tr>
                        <tr>
                            <th scope="row">UK Sizes</th>
                            <td>5,5</td>
                            <td>6</td>
                            <td>6,5</td>
                            <td>7</td>
                            <td>7,5</td>
                            <td>8</td>
                            <td>8,5</td>
                            <td>9</td>
                            <td>9,5</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <th scope="row">Inches</th>
                            <td>9.25"</td>
                            <td>9.5"</td>
                            <td>9.625"</td>
                            <td>9.75"</td>
                            <td>9.9375"</td>
                            <td>10.125"</td>
                            <td>10.25"</td>
                            <td>10.5"</td>
                            <td>10.625"</td>
                            <td>10.75"</td>
                        </tr>
                        <tr>
                            <th scope="row">CM</th>
                            <td>23,5</td>
                            <td>24,1</td>
                            <td>24,4</td>
                            <td>24,8</td>
                            <td>25,4</td>
                            <td>25,7</td>
                            <td>26</td>
                            <td>26,7</td>
                            <td>27</td>
                            <td>27,3</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /table -->
            </div>
        </div>
    </div>
</div>

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/sticky_sidebar.min.js"></script>
<script>
    // Sticky sidebar
    $('#sidebar_fixed').theiaStickySidebar({
        minWidth: 991,
        updateSidebarHeight: false,
        additionalMarginTop: 90
    });
</script>
<script src="js/lightbox.js"></script>


</body>
</html>