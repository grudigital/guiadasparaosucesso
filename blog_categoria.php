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

                <?php
                require("admin/connections/conn.php");
                $pegaid = (int)$_GET['id'];

                $sql = "select * from blog_categorias where id = '$pegaid'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<h1>$row[categoria]</h1>";
                }
                ?>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="widget search_blog d-block d-sm-block d-md-block d-lg-none">
                        <div class="form-group">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Buscar..">
                            <button type="submit"><i class="ti-search"></i><span class="sr-only">Search</span></button>
                        </div>
                    </div>
                    <div class="row">

                        <?php
                        require("admin/connections/conn.php");
                        $pegaid = (int)$_GET['id'];

                        $sql = "select bp.id bpid, bp.titulo bptitulo, bp.imagem bpimagem, bp.resumo bpresumo, bp.datapublicacao bpdatapublicacao, bp.categoria bpcategoria, bc.id bcid, bc.categoria bccategoria FROM blog_publicacoes as bp inner join blog_categorias as bc on bp.categoria = bc.id where bc.id = '$pegaid'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<div class='col-md-6'>";
                            echo "<article class='blog'>";
                            echo "<figure>";
                            echo "<a href='blog_publicacao.php?id=$row[bpid]'><img src='admin/uploads/blog/$row[bpimagem]' alt=''>";
                            echo "<div class='preview'><span>Ver publicação</span></div>";
                            echo "</a>";
                            echo "</figure>";
                            echo "<div class='post_info'>";
                            echo "<small>$row[bccategoria] - $row[bpdatapublicacao]</small>";
                            echo "<h2 style='margin - top: 20px'><a href='blog_publicacao.php?id=$row[bpid]'>$row[bptitulo]</a></h2>";
                            echo "<p>$row[bpresumo]</p>";
                            echo "</div>";
                            echo "</article>";
                            echo "</div>";
                        }
                        ?>

                    </div>
                </div>
                <aside class="col-lg-3">

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Categorias</h4>
                        </div>
                        <ul class="cats">
                            <?php
                            require("admin/connections/conn.php");
                            $sql = "select * from blog_categorias order by categoria";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<li><a href='blog_categoria.php?id=$row[id]'>$row[categoria]</a></li>";
                                //echo "<li><a href='#'>$row[categoria] <span>($rowcount)</span></a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                </aside>
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