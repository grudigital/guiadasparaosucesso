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
                        echo "<a href='#' title='$row[atitulo]' data-effect='mfp-zoom-in'><img
                                    src='admin/uploads/anunciantes/$row[aimagem]' alt='' class='img-fluid'></a>";
                        echo "</p>";
                    }
                    ?>

                </div>
                <div class="col-lg-6" id="sidebar_fixed">

                    <?php
                    require("admin/connections/conn.php");
                    $pegaid = (int)$_GET['id'];

                    $sql = "select a.id aid, a.titulo atitulo,a.categoria acategoria, a.telefone atelefone, a.logradouro alogradouro, a.numero anumero, a.bairro abairro, a.cidade acidade, a.estado aestado, a.inicioplano ainicioplano, a.fimplano afimplano, a.whatsapp awhatsapp, a.email aemail, a.facebook afacebook, a.instagram ainstagram, a.descricao adescricao, a.senha asenha, a.imagem aimagem, a.video avideo, a.status astatus, a.datacadastro adatacadastro, ac.id acid, ac.categoria accategoria, ac.imagem acimagem FROM anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id  where a.id = '$pegaid'";
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

                    $sql = "select a.id aid, a.titulo atitulo,a.categoria acategoria,a.logotipo alogotipo, a.telefone atelefone, a.logradouro alogradouro, a.numero anumero, a.bairro abairro, a.cidade acidade, a.estado aestado, a.inicioplano ainicioplano, a.fimplano afimplano, a.whatsapp awhatsapp, a.email aemail, a.facebook afacebook, a.instagram ainstagram, a.descricao adescricao, a.senha asenha, a.imagem aimagem, a.video avideo, a.status astatus, a.datacadastro adatacadastro, ac.id acid, ac.categoria accategoria, ac.imagem acimagem FROM anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id  where a.id = '$pegaid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<div class='prod_info'>";
                        echo "<h1>$row[atitulo]</h1>";
                        echo "<span style='margin-bottom: 30px' class='rating'><i class='icon-star voted'></i><i class='icon-star voted'></i><i
                                    class='icon-star voted'></i><i class='icon-star voted'></i><i class='icon-star'></i><em>4 avaliacoes</em></span>";

                        if ($row['alogotipo'] == '') {

                        } else {
                            echo "<div style='margin-bottom:30px;border:solid 1px #ddd; padding-top:10px; padding-bottom:10px;width: 230px'><img src='admin/uploads/logotipos/$row[alogotipo]'></div>";
                        }
                        echo "<p><strong><img width='25px' src='img/icone-telefone2.png'></strong><span style='margin-left:5px'> $row[atelefone]</span></p>";
                        echo "<p><strong><img width='25px' src='img/icone-email.png'></strong> <a style='color:#444; text-decoration: none;margin-left:5px' href='mailto:$row[aemail]' target='_blank'>$row[aemail]</a></p>";
                        echo "<p><strong><img width='25px' src='img/icone-facebook2.png'></strong> <a style='color:#444;margin-left:5px;text-decoration: none' href='$row[afacebook]' target='_blank'>$row[afacebook]</a></p>";
                        echo "<p><strong><img width='25px' src='img/icone-instagram2.png'></strong> <a style='color:#444;margin-left:5px;text-decoration: none' href='$row[ainstagram]' target='_blank'>$row[ainstagram]</a></p>";
                        echo "<p><strong><img width='25px' src='img/icone-endereco2.png'></strong><span style='color:#444;margin-left:8px;text-decoration: none'>$row[alogradouro], $row[anumero] - $row[abairro] - $row[acidade]/$row[aestado]</span> </p>";


                    }
                    ?>


                </div>
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
                                        Description
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

                                            echo "<div class='col-md-6'>";
                                            echo "<h3>Vídeo</h3>";
                                            echo "<div class='table-responsive'>";
                                            echo "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/$row[avideo]\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
                                            echo "</div>";
                                            echo "</div>";

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
                                    <div style='color:#155724; padding-top: 7px; border-radius: 5px; margin-bottom: 30px; padding-left:10px; height:40px; background-color:#d4edda; font-size:18px; border-bolor:#c3e6cb  ' class='alert alert-success' role='alert'>Comentário em processo de aprovação. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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

                    $sql = "select a.id aid, a.titulo atitulo, a.categoria acategoria, a.imagem aimagem, ac.id acid, ac.categoria accategoria, ac.imagem accimagem from anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id ";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<div class='item'>";
                        echo "<div class='grid_item'>";
                        echo "<figure>";
                        echo "<a href='anunciante.php?id=$row[aid]'>";
                        echo "<img class='owl-lazy' src='admin/uploads/anunciantes/$row[aimagem]' data-src='admin/uploads/anunciantes/$row[aimagem]' alt=''>";
                        echo "</a>";
                        echo "</figure>";
                        echo "<div class='rating'><i class='icon-star voted'></i><i class='icon-star voted'></i><i class='icon-star voted'></i><i class='icon-star voted'></i><i class='icon-star'></i></div>";
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
        <label>1 product added to cart</label>
    </div>
    <div class="item">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="item_panel">
                        <figure>
                            <img src="img/products/product_placeholder_square_small.jpg"
                                 data-src="img/products/shoes/1.jpg" class="lazy" alt="">
                        </figure>
                        <h4>1x Armor Air X Fearr</h4>
                        <div class="price_panel"><span class="new_price">$148.00</span><span
                                class="percentage">-20%</span> <span class="old_price">$160.00</span></div>
                    </div>
                </div>
                <div class="col-md-5 btn_panel">
                    <a href="cart.html" class="btn_1 outline">View cart</a> <a href="checkout.html" class="btn_1">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /item -->
    <div class="container related">
        <h4>Who bought this product also bought</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="item_panel">
                    <a href="#0">
                        <figure>
                            <img src="img/products/product_placeholder_square_small.jpg"
                                 data-src="img/products/shoes/2.jpg" alt="" class="lazy">
                        </figure>
                    </a>
                    <a href="#0">
                        <h5>Armor Okwahn II</h5>
                    </a>
                    <div class="price_panel"><span class="new_price">$90.00</span></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item_panel">
                    <a href="#0">
                        <figure>
                            <img src="img/products/product_placeholder_square_small.jpg"
                                 data-src="img/products/shoes/3.jpg" alt="" class="lazy">
                        </figure>
                    </a>
                    <a href="#0">
                        <h5>Armor Air Wildwood ACG</h5>
                    </a>
                    <div class="price_panel"><span class="new_price">$75.00</span><span class="percentage">-20%</span>
                        <span class="old_price">$155.00</span></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item_panel">
                    <a href="#0">
                        <figure>
                            <img src="img/products/product_placeholder_square_small.jpg"
                                 data-src="img/products/shoes/4.jpg" alt="" class="lazy">
                        </figure>
                    </a>
                    <a href="#0">
                        <h5>Armor ACG React Terra</h5>
                    </a>
                    <div class="price_panel"><span class="new_price">$110.00</span></div>
                </div>
            </div>
        </div>
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

</body>
</html>