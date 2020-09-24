<!DOCTYPE html>
<html lang="pt-BR">

<?php include 'includes/head.php';?>


<body>

<div id="page">

    <?php include 'includes/header.php';?>

    <main>
        <div class="top_banner">




            <?php
            require("admin/connections/conn.php");
            $sql = "select * FROM banners where id = 17";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='opacity-mask d-flex align-items-center' data-opacity-mask='rgba(0, 0, 0, 0.3)'>";
                echo "<div class='container'>";
                echo "<h1>$row[titulo]</h1>";
                echo "</div>";
                echo "</div>";
                echo "<img src='admin/uploads/banners/$row[imagem]' class='img-fluid' alt=''>";
            }
            ?>


        </div>
        <!-- /top_banner -->

        <div id="stick_here"></div>
        <div class="toolbox elemento_stick">
            <div class="container">

                <div class="collapse" id="filters"><div class="row small-gutters filters_listing_1">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown" class="drop">Categories</a>
                                <div class="dropdown-menu">
                                    <div class="filter_type">
                                        <ul>
                                            <li>
                                                <label class="container_check">Men <small>12</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Women <small>24</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Running <small>23</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Training <small>11</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                        <a href="#0" class="apply_filter">Apply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown" class="drop">Color</a>
                                <div class="dropdown-menu">
                                    <div class="filter_type">
                                        <ul>
                                            <li>
                                                <label class="container_check">Blue <small>06</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Red <small>12</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Orange <small>17</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Black <small>43</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                        <a href="#0" class="apply_filter">Apply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown" class="drop">Brand</a>
                                <div class="dropdown-menu">
                                    <div class="filter_type">
                                        <ul>
                                            <li>
                                                <label class="container_check">Adidas <small>11</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Nike <small>08</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Vans <small>05</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">Puma <small>18</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                        <a href="#0" class="apply_filter">Apply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dropdown">
                                <a href="#" data-toggle="dropdown" class="drop">Price</a>
                                <div class="dropdown-menu">
                                    <div class="filter_type">
                                        <ul>
                                            <li>
                                                <label class="container_check">$0 — $50<small>11</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">$50 — $100<small>08</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">$100 — $150<small>05</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="container_check">$150 — $200<small>18</small>
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        </ul>
                                        <a href="#0" class="apply_filter">Apply</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /dropdown -->

                        </div></div></div>
            </div>
        </div>
        <!-- /toolbox -->

        <div class="container margin_30">
            <div class="row small-gutters">
                <?php
                require("admin/connections/conn.php");
                $sql = "select id, titulo,resumo,descricao,imagem,video,linkpagamento,precoantigo,preconovo,status,datacadastro FROM produtos where status = 1 ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                echo "<div class='col-6 col-md-4 col-xl-3'>";
                    echo "<div class='grid_item'>";
                        echo "<figure>";
                            echo "<a href='produto_interna.php?id=$row[id]'>";
                                echo "<img class='img-fluid lazy' src='admin/uploads/produtos/$row[imagem]' data-src='admin/uploads/produtos/$row[imagem]' alt=''>";
                                echo "</a>";
                            echo "</figure>";
                        echo "<a href='produto_interna.php?id=$row[id]'>";
                            echo "<h3>$row[titulo]</h3>";
                            echo "</a>";
                        echo "<div class='price_box'>";
                            echo "<span class='new_price'>R$ $row[preconovo] </span>";
                            echo "<span class='old_price'>R$ $row[precoantigo] </span>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                }
                ?>

            </div>
        </div>
    </main>
    <?php include 'includes/footer.php';?>
</div>

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/sticky_sidebar.min.js"></script>
<script src="js/specific_listing.js"></script>

</body>
</html>