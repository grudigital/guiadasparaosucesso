<!DOCTYPE html>
<html lang="pt-BR">

<?php include 'includes/head.php'; ?>


<body>

<div id="page">

    <?php include 'includes/header.php'; ?>

    <main>

        <?php
        require("admin/connections/conn.php");

        $pegaid = (int)$_GET['id'];
        $sql = "select id,categoria,imagem FROM anunciantes_categoria where id = '$pegaid'";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<div class='top_banner'>";
            echo "<div class='opacity-mask d-flex align-items-center' data-opacity-mask='rgba(0, 0, 0, 0.3)'>";
            echo "<div class='container'>";
            echo "<h1>$row[categoria]</h1>";
            echo "</div>";
            echo "</div>";
            echo "<img src='admin/uploads/categorias/$row[imagem]' class='img-fluid' alt=''>";
            echo "</div>";
        }
        mysqli_close($conn);
        ?>


        <div id="stick_here"></div>

        <!-- /toolbox -->

        <div style="margin-top:50px" class="container margin_30">
            <div class="row small-gutters">


                <?php
                require("admin/connections/conn.php");
                $pegaid = (int)$_GET['id'];

                $sql = "select * FROM anunciantes where categoria = '$pegaid' and status = 1 ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='col-6 col-md-4 col-xl-3'>";
                    echo "<div class='grid_item'>";
                    echo "<figure>";
                    echo "<a href='anunciante.php?id=$row[id]'>";
                    echo "<img class='img-fluid lazy' src='admin/uploads/anunciantes/$row[imagem]'
                                     data-src='admin/uploads/anunciantes/$row[imagem]' alt='$row[titulo]'>";
                    echo "</a>";
                    echo "</figure>";
                    echo "<a href='anunciante.php?id=$row[id]'>";
                    echo "<h3>$row[titulo]</h3>";
                    echo "</a>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>


            </div>


        </div>
        <!-- /container -->
    </main>
    <!-- /main -->

    <?php include 'includes/footer.php'; ?>

</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="js/sticky_sidebar.min.js"></script>
<script src="js/specific_listing.js"></script>

</body>
</html>