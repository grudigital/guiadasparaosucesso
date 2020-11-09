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
                        <?php
                        require("admin/connections/conn.php");
                        $pegaid = (int)$_GET['id'];
                        $sql = "select bp.id bpid, bp.titulo bptitulo, bp.imagem bpimagem, bp.resumo bpresumo, bp.datapublicacao bpdatapublicacao, bp.categoria bpcategoria, bc.id bcid, bc.categoria bccategoria FROM blog_publicacoes as bp inner join blog_categorias as bc on bp.categoria = bc.id where bp.id = '$pegaid' ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<li><a href='index.php'>Home</a></li>";
                            echo "<li><a href='blog_categoria.php?id=$row[bcid]'>$row[bccategoria]</a></li>";
                            echo "<li>$row[bptitulo]</li>";
                        }
                        ?>


                    </ul>
                </div>
            </div>
            <!-- /page_header -->
            <div class="row">
                <div class="col-lg-9">

                    <?php
                    require("admin/connections/conn.php");
                    $pegaid = (int)$_GET['id'];

                    $sql = "select bp.id bpid, bp.video bpvideo, bp.titulo bptitulo, bp.imagem bpimagem, bp.resumo bpresumo, bp.texto bptexto, bp.datapublicacao bpdatapublicacao, bp.categoria bpcategoria, bc.id bcid, bc.categoria bccategoria FROM blog_publicacoes as bp inner join blog_categorias as bc on bp.categoria = bc.id where bp.id = '$pegaid' ";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<div class='singlepost'>";
                        echo "<figure><img alt='' class='img-fluid' src='admin/uploads/blog/$row[bpimagem]'></figure>";
                        echo "<h1>$row[bptitulo]</h1>";
                        echo "<div class='postmeta'>";
                        echo "<ul>";
                        echo "<li><a href='blog_categoria.php?id=$row[bcid]'><i class='ti-folder'></i> $row[bccategoria]</a></li>";
                        echo "<li><i class='ti-calendar'></i> $row[bpdatapublicacao]</li>";
                        echo "</ul>";
                        echo "</div>";
                        echo "<div class='post-content'>";
                        echo "<p>$row[bptexto]</p>";
                        echo "</div>";
                        if ($row['bpvideo'] != null) {
                            echo "<div style='margin-bottom: 30px; margin-top: 30px;'>";
                            echo "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/$row[bpvideo]\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
                            echo "</div>";
                        }


                        echo "</div>";


                    }
                    ?>

                    <!--                    <div id="comments">-->
                    <!--                        <h5>Comments</h5>-->
                    <!--                        <ul>-->
                    <!--                            <li>-->
                    <!--                                <div class="avatar">-->
                    <!--                                    <a href="#"><img src="img/avatar1.jpg" alt="">-->
                    <!--                                    </a>-->
                    <!--                                </div>-->
                    <!--                                <div class="comment_right clearfix">-->
                    <!--                                    <div class="comment_info">-->
                    <!--                                        By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a-->
                    <!--                                                href="#"><i class="icon-reply"></i></a>-->
                    <!--                                    </div>-->
                    <!--                                    <p>-->
                    <!--                                        Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non-->
                    <!--                                        pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis-->
                    <!--                                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed-->
                    <!--                                        sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.-->
                    <!--                                    </p>-->
                    <!--                                </div>-->
                    <!--                            </li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <hr>-->
                    <!---->
                    <!--                    <h5>Comentar</h5>-->
                    <!--                    <div class="row">-->
                    <!--                        <div class="col-md-4 col-sm-6">-->
                    <!--                            <div class="form-group">-->
                    <!--                                <input type="text" name="name" id="name2" class="form-control" placeholder="Name">-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="col-md-4 col-sm-6">-->
                    <!--                            <div class="form-group">-->
                    <!--                                <input type="text" name="email" id="email2" class="form-control" placeholder="Email">-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="col-md-4 col-sm-12">-->
                    <!--                            <div class="form-group">-->
                    <!--                                <input type="text" name="email" id="website3" class="form-control"-->
                    <!--                                       placeholder="Website">-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="form-group">-->
                    <!--                        <textarea class="form-control" name="comments" id="comments2" rows="6"-->
                    <!--                                  placeholder="Comment"></textarea>-->
                    <!--                    </div>-->
                    <!--                    <div class="form-group">-->
                    <!--                        <button type="submit" id="submit2" class="btn_1 add_bottom_15">Submit</button>-->
                    <!--                    </div>-->
                </div>

                <aside class="col-lg-3">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Últimas publicações</h4>
                        </div>
                        <ul class="comments-list">
                            <?php
                            require("admin/connections/conn.php");
                            $sql = "select bp.id bpid, bp.titulo bptitulo, bp.imagem bpimagem, bp.resumo bpresumo, bp.video bpvideo, bp.datapublicacao bpdatapublicacao, bp.categoria bpcategoria, bc.id bcid, bc.categoria bccategoria FROM blog_publicacoes as bp inner join blog_categorias as bc on bp.categoria = bc.id order by bp.id desc limit 3 ";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<li>";
                                echo "<div class='alignleft'>";
                                echo "<a href='blog_publicacao.php?id=$row[bpid]'><img src='admin/uploads/blog/$row[bpimagem]' alt=''></a>";
                                echo "</div>";
                                echo "<small>$row[bccategoria] - $row[bpdatapublicacao]</small>";
                                echo "<h3><a href='blog_publicacao.php?id=$row[bpid]' title=''>$row[bptitulo]</a></h3>";
                                echo "</li>";


                            }
                            ?>

                        </ul>
                    </div>
                    <!-- /widget -->
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
                <!-- /aside -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>

    <?php include 'includes/footer.php'; ?>
</div>
<div id="toTop"></div>
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>


</body>
</html>