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
        <div class="container margin_30">
            <div class="page_header">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Estabelecimentos conveniados</li>
                    </ul>
                </div>
                <h1>Estabelecimentos conveniados</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget search_blog d-block d-sm-block d-md-block d-lg-none">
                        <div class="form-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Buscar..">
                            <button type="submit"><i class="ti-search"></i><span class="sr-only">Search</span></button>
                        </div>
                    </div>
                    <div class="row">

                        <?php
                        require("admin/connections/conn.php");
                        $sql = "select * from estabelecimentos order by id desc";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<div class='col-md-4'>";
                            echo "<article class='blog'>";
                            echo "<figure>";
                            echo "<a href='#'><img src='admin/uploads/estabelecimentos/$row[imagem]' alt=''>";
//                            echo "<div class='preview'><span>Ver publicação</span></div>";
                            echo "</a>";
                            echo "</figure>";
                            echo "<div class='post_info'>";
                            echo "<h2 style='margin-top: 20px'><a href='#'>$row[titulo]</a></h2>";
                            echo "<p>$row[descricao]</p>";
                            echo "<hr>";

                            echo "<small>Endereço: $row[logradouro], $row[numero] - $row[complemento] - $row[cep] - $row[cidade] - $row[estado] </small>";
                            echo "<div style='margin-top: 15px'><small>Telefone: $row[telefone] / Site: <a href='$row[site]' target='_blank'> $row[site]</a>  </small></div>";
                            echo "</div>";
                            echo "</article>";
                            echo "</div>";
                        }
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</div>
<div id="toTop"></div>
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>


</body>
</html>