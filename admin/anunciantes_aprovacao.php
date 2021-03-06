<?php
session_start();
if ($_SESSION['usuarioNome'] == '')
?>
<!DOCTYPE html>
<html lang="pt-BR">

<?php include 'includes/head.php'; ?>


<body>

<div id="page">

    <?php include 'includes/header.php'; ?>

    <main class="bg_gray">
        <div style='margin-top:-100px' class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div id="confirm">
                        <div class="icon icon--order-success svg add_bottom_15">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                                <g fill="none" stroke="#8EC343" stroke-width="2">
                                    <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                    <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                </g>
                            </svg>
                        </div>
                        <h2>Agora selecione seu plano</h2>
                        <p>Após o pagamento envie o comprovante para o email: contato@guiadasparaosucesso.com.br</p>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <div style="margin-top:-150px" class="container margin_30">
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
        <!-- /container -->

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