<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();
if ($_SESSION['usuarioNome'] == '')
?>
<!DOCTYPE html>
<html lang="pt-BR">

<?php include 'includes/head.php';?>


<body>

<div id="page">

    <?php include 'includes/header.php';?>

    <main class="bg_gray">


        <?php
        require("admin/connections/conn.php");
        $sql = "select * FROM banners where local = 4";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {


            echo "<div class='top_banner general'>";
            echo "<div class='opacity-mask d-flex align-items-md-center' data-opacity-mask='rgba(0, 0, 0, 0.1)'>";
            echo "<div class='container'>";
            echo "<div class='row justify-content-end'>";
            echo "<div class='col-lg-8 col-md-6 text-right'>";
            echo "<h1>$row[titulo]</h1>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "<img src='admin/uploads/banners/$row[imagem]' class='img-fluid' alt=''>";
            echo "</div>";

        }
        ?>

        <div class="bg_white">
            <div class="container margin_90_0" style="padding-bottom: 20px">

                <?php
                require("admin/connections/conn.php");
                $sql = "select * FROM blocos where id = 7";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {


                    echo "<div style='margin-top:25px; margin-bottom:25px' class='row justify-content-between align-items-center flex-lg-row-reverse content_general_row'>";
                    echo "<div class='col-lg-5 text-center'>";
                    echo "<figure><img src='admin/uploads/blocos/$row[imagem]' data-src='admin/uploads/blocos/$row[imagem]' alt='' class='img-fluid lazy' width='350' height='268'></figure>";
                    echo "</div>";
                    echo "<div class='col-lg-6'>";
                    echo "<h2>$row[titulo]</h2>";
                    echo "<p class='lead'>$row[resumo]</p>";
                    echo "<p>$row[texto]</p>";
                    echo "</div>";
                    echo "</div>";

                }
                ?>






            </div>

        </div>

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Planos GPS</h2>
                <span>Planos</span>
                <p>Confira nossos produtos oficiais</p>
            </div>
            
            <div style="margin-top:50px" class="container margin_30">
            <div class="row small-gutters">


                <?php
                require("admin/connections/conn.php");
                $pesquisar = $_POST['pesquisar'];

                $sql = "select * from planos";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='col-4 col-md-4 col-xl-4'>";
                    echo "<div class='grid_item'>";
                    echo "<figure>";
                    echo "<a href='planos_interna.php?id=$row[id]'>";
                    echo "<img class='img-fluid lazy' src='admin/uploads/planos/$row[imagem]'
                                     data-src='admin/uploads/planos/$row[imagem]' alt='$row[titulo]'>";
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
            
            
            
            
            
           
        </div>

    </main>

    <?php include 'includes/footer.php';?>
</div>
<div id="toTop"></div>
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>
<script src="js/carousel-home.js"></script>
</body>
</html>