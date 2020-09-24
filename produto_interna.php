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
                    $sql = "select  id, titulo,resumo,descricao,imagem,video,linkpagamento,preconovo,precoantigo,status,datacadastro from produtos where id = '$pegaid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                    echo "<p>";
                        echo "<a href='admin/uploads/produtos/$row[imagem]' title='Photo title' data-effect='mfp-zoom-in'><img
                                src='admin/uploads/produtos/$row[imagem]' width='600px' height='600px' alt='' class='img-fluid'></a>";
                        echo "</p>";
                    }
                    mysqli_close($conn);
                    ?>



                    <?php
                    require("admin/connections/conn.php");
                    $pegaid = (int)$_GET['id'];
                    $sql = "select  id, titulo,resumo,descricao,imagem,video,linkpagamento,preconovo,precoantigo,status,datacadastro from produtos where id = '$pegaid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        if($row['video'] == null){

                        }else {
                            echo "<p>";
                            echo "<iframe width='580' height='600' src='https://www.youtube.com/embed/$row[video]' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                            echo "</p>";
                        }






                    }
                    mysqli_close($conn);
                    ?>


                </div>
                <div class="col-lg-6" id="sidebar_fixed">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href='produtos.php'>Produtos</a></li>
                        </ul>
                    </div>

                    <?php
                    require("admin/connections/conn.php");
                    $pegaid = (int)$_GET['id'];
                    $sql = "select  id, titulo,resumo,descricao,imagem,video,linkpagamento,preconovo,precoantigo,status,datacadastro from produtos where id = '$pegaid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<div class='prod_info'>";
                        echo "<h1>$row[titulo]</h1>";
                        echo "<p style='margin-top:10px'>$row[descricao]</p>";
                        echo " <div class='row'>";
                        echo "<div class='col-lg-5 col-md-6'>";
                        echo "<div class='price_main'><span class='new_price'>R$ $row[preconovo] </span><span class='old_price'> R$$row[precoantigo]</span></div>";
                        echo "</div>";
                        echo "<div class='col-lg-4 col-md-6'>";
                        echo " <div class='btn_add_to_cart'><a href='$row[linkpagamento]' class='btn_1'>Comprar</a></div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    mysqli_close($conn);
                    ?>


                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->


        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Outros produtos</h2>
                <span>Produtos</span>
                <p>Confira outros produtos cadastrados.</p>
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

<div class="top_panel">
    <div class="container header_panel">
        <a href="#0" class="btn_close_top_panel"><i class="ti-close"></i></a>
        <label>1 product added to cart</label>
    </div>
    <!-- /header_panel -->
    <div class="item">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="item_panel">
                        <figure>
                            <img src="img/products/product_placeholder_square_small.jpg"
                                 data-src="img/products/shoes/1.jpg" class="lazy" alt="">
                        </figure>
                        <h4>1x Armor Air X Fear</h4>
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