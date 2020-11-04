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

    <main>

        <?php
        require("admin/connections/conn.php");

        $pesquisar = $_POST['pesquisar'];
        $sql = "select * FROM anunciantes where titulo LIKE '%$pesquisar%'";
        $result = mysqli_query($conn, $sql);

        $sqlbanner = "select * from banners where id = 18";
        $resultbanner = mysqli_query($conn, $sqlbanner);

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<div class='top_banner'>";
            echo "<div class='opacity-mask d-flex align-items-center' data-opacity-mask='rgba(0, 0, 0, 0.3)'>";
            echo "<div class='container'>";
            echo "<h1>Busca por: $row[titulo]</h1>";
            echo "</div>";
            echo "</div>";

        }
        mysqli_close($conn);
        ?>

        <?php
        require("admin/connections/conn.php");

        $sql = "select * FROM banners where id = 18";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<img src='admin/uploads/banners/$row[imagem]' class='img-fluid' alt=''>";
            echo "</div>";
        }
        mysqli_close($conn);
        ?>


        <div id="stick_here"></div>


        <div style="margin-top:50px" class="container margin_30">
            <div class="row small-gutters">


                <?php
                require("admin/connections/conn.php");
                $pesquisar = $_POST['pesquisar'];

                $sql = "select a.id aid, a.titulo atitulo, a.categoria acategoria, a.telefone atelefone, a.logradouro alogradouro, a.numero anumero, a.bairro abairro, a.cidade acidade, a.estado aestado, a.inicioplano afimplano, a.whatsapp awhatsapp, a.email aemail, a.facebook afacebook, a.instagram ainstagram, a.descricao adescricao, a.senha asenha, a.imagem aimagem, a.logotipo alogotipo, a.video avideo, a.status astatus, a.datacadastro adatacadastro, ac.id acid, ac.categoria accategoria, ac.imagem acimagem from anunciantes as a inner join anunciantes_categoria as ac on a.categoria = ac.id where a.titulo LIKE '%$pesquisar%' and a.status = 1 or ac.categoria LIKE '%$pesquisar%' and a.status = 1";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='col-6 col-md-4 col-xl-3'>";
                    echo "<div class='grid_item'>";
                    echo "<figure>";
                    echo "<a href='anunciante.php?id=$row[aid]'>";
                    if($row['aimagem'] == null or $row['aimagem'] == ''){
                        echo "<img style='height:195px; width:290px' class='img-fluid lazy' src='images/sem-foto.png'
                                     data-src='images/sem-foto.png' alt='$row[atitulo]'>";
                    }else{
                        echo "<img style='height:195px; width:290px' class='img-fluid lazy' src='admin/uploads/anunciantes/$row[aimagem]'
                                     data-src='admin/uploads/anunciantes/$row[aimagem]' alt='$row[atitulo]'>";
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

<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>

<script src="js/sticky_sidebar.min.js"></script>
<script src="js/specific_listing.js"></script>

</body>
</html>