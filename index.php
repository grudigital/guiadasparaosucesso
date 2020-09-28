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


                    echo "<div class='owl-slide cover' style='background-image: url(admin/uploads/banners/$row[imagem]);'>";
                    echo "<div class='opacity-mask d-flex align-items-center' data-opacity-mask='rgba(0, 0, 0, 0.5)'>";
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
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <figure>
                            <span class="ribbon off">-30%</span>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/1.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/1_b.jpg" alt="">
                            </a>
                            <div data-countdown="2019/05/15" class="countdown"></div>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air x Fear</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$48.00</span>
                            <span class="old_price">$60.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>


                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon off">-30%</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/2.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/2_b.jpg" alt="">
                            </a>
                            <div data-countdown="2019/05/10" class="countdown"></div>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Armor Okwahn II</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$90.00</span>
                            <span class="old_price">$170.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon off">-50%</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/3.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/3_b.jpg" alt="">
                            </a>
                            <div data-countdown="2019/05/21" class="countdown"></div>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Wildwood ACG</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$75.00</span>
                            <span class="old_price">$155.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon new">new</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/4.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/4_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Armor ACG React Terra</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$110.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon new">new</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon new">new</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/6.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/6_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$130.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/7.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/7_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Max 98</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$115.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/8.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/8_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Max 720</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$120.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
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
                <h2>Mais acessados</h2>
                <span>Fornecedores</span>
                <p>Os fornecedores mais badalados do portal GPS</p>
            </div>
            <div class="owl-carousel owl-theme products_carousel">
                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/4.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>ACG React Terra</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$110.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i
                                            class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i
                                            class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/5.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i
                                            class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i
                                            class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/8.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Air Color 720</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$120.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i
                                            class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i
                                            class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon off">-30%</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/2.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Okwahn II</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$90.00</span>
                            <span class="old_price">$170.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i
                                            class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i
                                            class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon off">-50%</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="owl-lazy" src="img/products/product_placeholder_square_medium.jpg"
                                     data-src="img/products/shoes/3.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star voted"></i><i class="icon-star voted"></i><i
                                    class="icon-star"></i>
                        </div>
                        <a href="product-detail-1.html">
                            <h3>Air Wildwood ACG</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$75.00</span>
                            <span class="old_price">$155.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i
                                            class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i
                                            class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /item -->
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