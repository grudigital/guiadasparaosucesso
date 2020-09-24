<header class="version_1">
    <div class="layer"></div><!-- Mobile menu overlay mask -->
    <div class="main_header">
        <div class="container">
            <div class="row small-gutters">
                <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                    <div id="logo">
                        <a href="index.php"><img src="img/logo.png" alt="" width="83" height="43"></a>
                    </div>
                </div>
                <nav class="col-xl-6 col-lg-7">
                    <a class="open_close" href="javascript:void(0);">
                        <div class="hamburger hamburger--spin">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </a>
                    <!-- Mobile menu button -->
                    <div class="main-menu">
                        <div id="header_menu">
                            <a href="index.php"><img src="img/logo_black.svg" alt="" width="100" height="35"></a>
                            <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="quem-somos.php">Quem somos</a>
                            </li>
                            <li>
                            <a href="produtos.php">Produtos</a>
                            </li>
                            <li>
                                <a href="faca-parte.php">Faça parte</a>
                            </li>
                            <li>
                                <a href="contato.php">Contato</a>
                            </li>
                        </ul>
                    </div>
                    <!--/main-menu -->
                </nav>
<?php
require("admin/connections/conn.php");
$sql = "select id, telefone,email,instagram,facebook,telegram,youtube FROM informacoes where id = 1";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-right'>";
                    echo "<a target='_blank' class='phone_top' href='https://api.whatsapp.com/send?phone=5511$row[telefone]'><strong><span>Precisa de ajuda?</span>$row[telefone]</strong></a>";
                    echo "</div>";
}
mysqli_close($conn);
?>
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /main_header -->

    <div class="main_nav Sticky">
        <div class="container">
            <div class="row small-gutters">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <nav class="categories">
                        <ul class="clearfix">
                            <li><span>
										<a href="#">
											<span class="hamburger hamburger--spin">
												<span class="hamburger-box">
													<span class="hamburger-inner"></span>
												</span>
											</span>
											Categorias
										</a>
									</span>
                                <div id="menu">
                                    <ul>
                                        <?php
                                        require("admin/connections/conn.php");
                                        $sql = "select * FROM anunciantes_categoria";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<li><span><a href='categoria.php?id=$row[id]'>$row[categoria]</a></span></li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                    <div class="custom-search-input">
                        <input type="text" placeholder="Busque especialistas para seu evento">
                        <button type="submit"><i class="header-icon_search_custom"></i></button>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 col-md-3">
                    <ul style="margin-left:-210px;" class="top_tools">


                        <li >
                            <div class="dropdown dropdown-access">
                                <a href="conta.php" class="access_link"><span>Conta</span></a>
                                <div style="margin-left: -170px" class="dropdown-menu">
                                    <a href="login.php" class="btn_1">Entrar ou cadastrar</a>
                                    <ul>
                                        <li>
                                            <a href="meus-anuncios.php"><i class="ti-package"></i>Meus anúncios</a>
                                        </li>
                                        <li>
                                            <a href="perfil.php"><i class="ti-user"></i>Meu perfil</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- /dropdown-access-->
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <div class="search_mob_wp">
            <input type="text" class="form-control" placeholder="Search over 10.000 products">
            <input type="submit" class="btn_1 full-width" value="Search">
        </div>
        <!-- /search_mobile -->
    </div>
    <!-- /main_nav -->
</header>
<!-- /header -->