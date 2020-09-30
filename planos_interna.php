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
                    $sql = "select  id,titulo,valor,resumo,descricao,botao,imagem,status from planos where id = '$pegaid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<p>";
                        echo "<a href='admin/uploads/planos/$row[imagem]' title='Photo title' data-effect='mfp-zoom-in'><img
                                src='admin/uploads/planos/$row[imagem]' width='600px' height='600px' alt='' class='img-fluid'></a>";
                        echo "</p>";
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
                    $sql = "select  id,titulo,valor,resumo,descricao,botao,imagem,status from planos where id = '$pegaid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<div class='prod_info'>";
                        echo "<h1>$row[titulo]</h1>";
                        echo "<p style='margin-top:10px'>$row[descricao]</p>";
                        echo " <div class='row'>";
                        echo "<div class='col-lg-5 col-md-6'>";
                        echo "<div class='price_main'><span class='new_price'>R$ $row[valor] </span></div>";
                        echo "</div>";
                        echo "<div class='col-lg-4 col-md-6'>";
                        echo " <div class='btn_add_to_cart'><a target='_blank' href='$row[botao]' class='btn_1'>Contratar</a></div>";
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
                <h2>Outros planos</h2>
                <span>Planos</span>
                <p>Confira outros planos cadastrados.</p>
            </div>
            <div class="owl-carousel owl-theme products_carousel">

                <?php
                require("admin/connections/conn.php");
                $sql = "select id,titulo,valor,resumo,descricao,botao,imagem,status FROM planos where status = 1 ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<div class='item'>";
                    echo "<div class='grid_item'>";
                    echo "<figure>";
                    echo "<a href='planos_interna.php?id=$row[id]'>";
                    echo "<img class='owl-lazy' src='admin/uploads/planos/$row[imagem]'
                                     data-src='admin/uploads/planos/$row[imagem]' alt=''>";
                    echo "</a>";
                    echo "</figure>";
                    echo "<a href='planos_interna.php?id=$row[id]'>";
                    echo "<h3>$row[titulo]</h3>";
                    echo "</a>";
                    echo "<div class='price_box'>";
                    echo "<span class='new_price'>$row[valor]</span>";
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