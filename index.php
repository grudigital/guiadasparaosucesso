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
        <div id="carousel-home-2">
            <div class="owl-carousel owl-theme">


                <?php
                require("admin/connections/conn.php");
                $sql = "select * FROM banners where local = 1 and status = 1";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

echo "<a href='$row[link]'>";
                    echo "<div class='owl-slide cover' style='background-image: url(admin/uploads/banners/$row[imagem]);'>";
                    echo "<div class='opacity-mask d-flex align-items-center'>";
                    echo "<div class='container'>";
                    echo "<div class='row justify-content-center justify-content-md-start'>";
                    echo "<div class='col-lg-12 static'>";
                    echo "<div class='slide-text text-center white'>";
                    echo "<p class='owl-slide-animated owl-slide-subtitle'>$row[titulo]</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                   
                    echo "</div>";
                     echo "</a>";

                }
                ?>

            </div>
            <div id="icon_drag_mobile"></div>
        </div>
        <!--/carousel-->


        <div class="container margin_60_35">
            <div class="row small-gutters categories_grid">


                <?php
                require("admin/connections/conn.php");
                $sql = "select ac.id acid, ac.categoria accategoria, cd.id cdid, cd.local cdlocal, cd.medidas cdmedidas, cd.categoria cdcategoria, cd.imagem cdimagem from anunciantes_categoria as ac inner join categorias_destaques as cd on ac.id = cd.categoria where cd.local = 1";
                $result = mysqli_query($conn, $sql);

                $sqllocal1 = "select a.id aid, a.categoria acategoria, cd.id cdid, cd.local cdlocal, cd.medidas cdmedidas, cd.categoria cdcategoria, cd.imagem cdimagem from anunciantes as a inner join categorias_destaques as cd on a.categoria = cd.categoria where cd.local = 1";
                $executa_query_local1 = mysqli_query($conn, $sqllocal1);
                $conta_linhas_local1 = mysqli_num_rows($executa_query_local1);

                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<div class='col-sm-12 col-md-6'>";
                    echo "<a href='categoria.php?id=$row[cdcategoria]'>";
                    echo "<img src='img/img_cat_home_1_placeholder.png' data-src='admin/uploads/categorias/$row[cdimagem]' alt=''
                             class='img-fluid lazy'>";
                    echo "<div class='wrapper'>";
                    echo "<h2>$row[accategoria]</h2>";
                    echo "<p>$conta_linhas_local1 profissionais cadastrados</p>";
                    echo "</div>";
                    echo "</a>";
                    echo "</div>";

                }
                mysqli_close($conn);
                ?>


                <div class="col-sm-12 col-md-6">
                    <div class="row small-gutters mt-md-0 mt-sm-2">


                        <?php
                        require("admin/connections/conn.php");
                        $sql = "select ac.id acid, ac.categoria accategoria, cd.id cdid, cd.local cdlocal, cd.medidas cdmedidas, cd.categoria cdcategoria, cd.imagem cdimagem from anunciantes_categoria as ac inner join categorias_destaques as cd on ac.id = cd.categoria where cd.local = 2";
                        $result = mysqli_query($conn, $sql);

                        $sqllocal2 = "select a.id aid, a.categoria acategoria, cd.id cdid, cd.local cdlocal, cd.medidas cdmedidas, cd.categoria cdcategoria, cd.imagem cdimagem from anunciantes as a inner join categorias_destaques as cd on a.categoria = cd.categoria where cd.local = 2";
                        $executa_query_local2 = mysqli_query($conn, $sqllocal2);
                        $conta_linhas_local2 = mysqli_num_rows($executa_query_local2);

                        while ($row = mysqli_fetch_assoc($result)) {


                            echo "<div class='col-sm-6'>";
                            echo "<a href='categoria.php?id=$row[cdcategoria]'>";
                            echo "<img src='img/img_cat_home_1_placeholder.png' data-src='admin/uploads/categorias/$row[cdimagem]' alt=''
                             class='img-fluid lazy'>";
                            echo "<div class='wrapper'>";
                            echo "<h2>$row[accategoria]</h2>";
                            echo "<p>$conta_linhas_local2 profissionais cadastrados</p>";
                            echo "</div>";
                            echo "</a>";
                            echo "</div>";

                        }
                        mysqli_close($conn);
                        ?>

                        <?php
                        require("admin/connections/conn.php");
                        $sql = "select ac.id acid, ac.categoria accategoria, cd.id cdid, cd.local cdlocal, cd.medidas cdmedidas, cd.categoria cdcategoria, cd.imagem cdimagem from anunciantes_categoria as ac inner join categorias_destaques as cd on ac.id = cd.categoria where cd.local = 3";
                        $result = mysqli_query($conn, $sql);

                        $sqllocal3 = "select a.id aid, a.categoria acategoria, cd.id cdid, cd.local cdlocal, cd.medidas cdmedidas, cd.categoria cdcategoria, cd.imagem cdimagem from anunciantes as a inner join categorias_destaques as cd on a.categoria = cd.categoria where cd.local = 3";
                        $executa_query_local3 = mysqli_query($conn, $sqllocal3);
                        $conta_linhas_local3 = mysqli_num_rows($executa_query_local3);

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<div class='col-sm-6'>";
                            echo "<a href='categoria.php?id=$row[cdcategoria]'>";
                            echo "<img src='img/img_cat_home_1_placeholder.png' data-src='admin/uploads/categorias/$row[cdimagem]' alt=''
                             class='img-fluid lazy'>";
                            echo "<div class='wrapper'>";
                            echo "<h2>$row[accategoria]</h2>";
                            echo "<p>$conta_linhas_local3 profissionais cadastrados</p>";
                            echo "</div>";
                            echo "</a>";
                            echo "</div>";
                        }
                        mysqli_close($conn);
                        ?>

                        <?php
                        require("admin/connections/conn.php");
                        $sql = "select ac.id acid, ac.categoria accategoria, cd.id cdid, cd.local cdlocal, cd.medidas cdmedidas, cd.categoria cdcategoria, cd.imagem cdimagem from anunciantes_categoria as ac inner join categorias_destaques as cd on ac.id = cd.categoria where cd.local = 4";
                        $result = mysqli_query($conn, $sql);

                        $sqllocal4 = "select a.id aid, a.categoria acategoria, cd.id cdid, cd.local cdlocal, cd.medidas cdmedidas, cd.categoria cdcategoria, cd.imagem cdimagem from anunciantes as a inner join categorias_destaques as cd on a.categoria = cd.categoria where cd.local = 4";
                        $executa_query_local4 = mysqli_query($conn, $sqllocal4);
                        $conta_linhas_local4 = mysqli_num_rows($executa_query_local4);

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<div class='col-sm-12 mt-sm-2'>";
                            echo "<a href='categoria.php?id=$row[cdcategoria]'>";
                            echo "<img src='img/img_cat_home_1_placeholder.png' data-src='admin/uploads/categorias/$row[cdimagem]' alt=''
                             class='img-fluid lazy'>";
                            echo "<div class='wrapper'>";
                            echo "<h2>$row[accategoria]</h2>";
                            echo "<p>$conta_linhas_local4 profissionais cadastrados</p>";
                            echo "</div>";
                            echo "</a>";
                            echo "</div>";
                        }
                        mysqli_close($conn);
                        ?>


                    </div>
                </div>

            </div>
            <!--/categories_grid-->
        </div>
        <!-- /container -->

        <hr class="mb-0">
        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Fornecedores Premium</h2>
                <span>Fornecedores</span>
                <p>Os melhores fornecedores com o selo Premium GPS</p>
            </div>
            <div class="row small-gutters">

                <?php
                require("admin/connections/conn.php");
                $sql = "SELECT a.id aid, a.imagem aimagem, a.status astatus, a.titulo atitulo, ac.anunciante acanunciante, AVG(estrelas) from anunciantes as a left join anunciantes_comentarios as ac on a.id = ac.anunciante where a.status = 1 group by a.id order by a.id desc limit 8";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<div class='col-6 col-md-4 col-xl-3'>";
                    echo "<div class='grid_item'>";
                    echo "<figure>";
                    echo "<a href='anunciante.php?id=$row[aid]'>";
                    echo "<img class='lazy' width='290' height='194' src='admin/uploads/anunciantes/$row[aimagem]'
                                     data-src='admin/uploads/anunciantes/$row[aimagem]' alt='$row[aimagem]'>";

                    echo "</a>";
                    echo "</figure>";

                        if($row['AVG(estrelas)'] <= '1.0000'){
                            echo "<img style='height:18px; margin-bottom: 5px' src='img/0estrelas.png'>";
                        }
                        else if($row['AVG(estrelas)'] >= '1.0001' && $row['AVG(estrelas)'] <= '1.9999'){
                            echo "<img style='height:18px; margin-bottom: 5px' src='img/1estrela.png'>";
                        }
                        else if($row['AVG(estrelas)'] >= '2.0000' && $row['AVG(estrelas)'] <= '2.9999'){
                            echo "<img style='height:18px; margin-bottom: 5px' src='img/2estrelas.png'>";
                        }
                        else if($row['AVG(estrelas)'] >= '3.0000' && $row['AVG(estrelas)'] <= '3.9999'){
                            echo "<img style='height:18px; margin-bottom: 5px' src='img/3estrelas.png'>";
                        }
                        else if($row['AVG(estrelas)'] >= '4.0000' && $row['AVG(estrelas)'] <= '4.9998'){
                            echo "<img style='height:18px; margin-bottom: 5px' src='img/4estrelas.png'>";
                        }
                        else if($row['AVG(estrelas)'] >= '4.9999' ){
                            echo "<img style='height:18px; margin-bottom: 5px' src='img/5estrelas.png'>";
                        }
                        else if($row['AVG(estrelas)'] == null ){
                            echo "<img style='height:18px; margin-bottom: 5px' src='img/0estrelas.png'>";
                        }

                        else{
                            echo "<img style='height:18px; margin-bottom: 5px' src='img/0estrelas.png'>";
                        }

                    echo "<a href='anunciante.php?id=$row[aid]'>";
                    echo "<br/><h3>$row[atitulo]</h3>";
                    echo "</a>";
                    echo "</div>";
                    echo "</div>";

                }
                ?>


            </div>
            <!-- /row -->
        </div>
        <?php
        require("admin/connections/conn.php");
        $sql = "select * FROM banners where local = 2";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

            echo "<div class='featured lazy' data-bg='url(admin/uploads/banners/$row[imagem])'>";
            echo "<div class='opacity-mask d-flex align-items-center' data-opacity-mask='rgba(0, 0, 0, 0.5)'>";
            echo "<div class='container margin_60'>";
            echo "<div class='row justify-content-center justify-content-md-start'>";
            echo "<div class='col-lg-6 wow' data-wow-offset='150'>";
            echo "<h3>$row[titulo]</h3>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Os melhores</h2>
                <span>Fornecedores</span>
                <p>Os fornecedores mais bem avaliados do portal GPS</p>
            </div>
            <div class="owl-carousel owl-theme products_carousel">

                <?php
                require("admin/connections/conn.php");
                $sql = "SELECT a.id aid, a.imagem aimagem, a.status astatus, a.titulo atitulo, ac.anunciante acanunciante, AVG(estrelas) from anunciantes as a left join anunciantes_comentarios as ac on a.id = ac.anunciante where a.status = 1 group by a.id";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<div class='item'>";
                    echo "<div class='grid_item'>";
                    echo "<figure>";
                    echo "<a href='anunciante.php?id=$row[aid]'>";
                    echo "<img class='owl-lazy' height='196' width='291' src='admin/uploads/anunciantes/$row[aimagem]'
                                     data-src='admin/uploads/anunciantes/$row[aimagem]' alt=''>";
                    echo "</a>";
                    echo "</figure>";
                    echo "<div class='rating'>";
                    if($row['AVG(estrelas)'] <= '1.0000'){
                        echo "<img style='width:40%; margin-left:30%;margin-bottom: 5px' src='img/0estrelas.png'>";
                    }
                    else if($row['AVG(estrelas)'] >= '1.0001' && $row['AVG(estrelas)'] <= '1.9999'){
                        echo "<img style='width:40%; margin-left:30%; margin-bottom: 5px' src='img/1estrela.png'>";
                    }
                    else if($row['AVG(estrelas)'] >= '2.0000' && $row['AVG(estrelas)'] <= '2.9999'){
                        echo "<img style='width:40%; margin-left:30%; margin-bottom: 5px' src='img/2estrelas.png'>";
                    }
                    else if($row['AVG(estrelas)'] >= '3.0000' && $row['AVG(estrelas)'] <= '3.9999'){
                        echo "<img style='width:40%; margin-left:30%; margin-bottom: 5px' src='img/3estrelas.png'>";
                    }
                    else if($row['AVG(estrelas)'] >= '4.0000' && $row['AVG(estrelas)'] <= '4.9998'){
                        echo "<img style='width:40%; margin-left:30%; margin-bottom: 5px' src='img/4estrelas.png'>";
                    }
                    else if($row['AVG(estrelas)'] >= '4.9999' ){
                        echo "<img style='width:40%; margin-left:30%; margin-bottom: 5px' src='img/5estrelas.png'>";
                    }
                    else if($row['AVG(estrelas)'] == null ){
                        echo "<img style='width:40%; margin-left:30%; margin-bottom: 5px' src='img/0estrelas.png'>";
                    }

                    else{
                        echo "<img style='width:40%; margin-left:30%; margin-bottom: 5px' src='img/0estrelas.png'>";
                    }

                    echo "</div>";
                    echo "<a href='anunciante.php?id=$row[aid]'>";
                    echo "<h3>$row[atitulo]</h3>";
                    echo "</a>";
                    echo "</div>";
                    echo "</div>";

                }
                ?>


            </div>
            <!-- /products_carousel -->
        </div>
        <!-- /container -->


        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Produtos</h2>
                <span>Produtos</span>
                <p>Confira nossos produtos oficiais</p>
            </div>
            <div class="owl-carousel owl-theme products_carousel">

                <?php
                require("admin/connections/conn.php");
                $sql = "select id, titulo,resumo,descricao,imagem,video,linkpagamento,precoantigo,preconovo,status,datacadastro FROM produtos where status = 1 ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<div class='item'>";
                    echo "<div class='grid_item'>";
                    echo "<figure>";
                    echo "<a href='produto_interna.php?id=$row[id]'>";
                    echo "<img class='owl-lazy' src='admin/uploads/produtos/$row[imagem]'
                                     data-src='admin/uploads/produtos/$row[imagem]' alt=''>";
                    echo "</a>";
                    echo "</figure>";
                    echo "<a href='produto_interna.php?id=$row[id]'>";
                    echo "<h3>$row[titulo]</h3>";
                    echo "</a>";
                    echo "<div class='price_box'>";
                    echo "<span class='new_price'>$row[preconovo]</span>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";

                }
                ?>
            </div>
        </div>
    </main>
    <!-- /main -->

    <?php include 'includes/footer.php'; ?>

    <!--/footer-->
</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/carousel-home-2.js"></script>

</body>
</html>