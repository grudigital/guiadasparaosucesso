<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if ($_SESSION['usuarioNome'] == '')
?>
<header class="version_1">
    <div class="layer"></div>
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
                    <div class="main-menu">
                        <div id="header_menu">
                            <a href="index.php"><img src="img/logo-mobile.png" alt="" width="100" height="35"></a>
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
                                <a href="produtos.php">Loja</a>
                            </li>

                            <li>
                                <a href="contato.php">Contato</a>
                            </li>
                            <li style="background-color: #fff; border-radius: 5px">
                                <a style="color:#653C7D; padding-top: 20px; padding-bottom: 20px" href="login2.php">Faça parte</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <?php
                require("admin/connections/conn.php");
                $sql = "select id, telefone,email,instagram,facebook,telegram,youtube FROM informacoes where id = 1";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-right'>";
                    echo "<a target='_blank' class='phone_top' href='mailto:$row[email]'><strong><span>Precisa de ajuda?</span>$row[email]</strong></a>";
                    echo "</div>";
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
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
                        <form method="POST" action="pesquisar.php">
                            <input type="text" name="pesquisar"
                                   placeholder="Busque por profissional ou categoria para seu evento">
                            <button type="submit"><i class="header-icon_search_custom"></i></button>
                        </form>
                    </div>
                </div>

                <?php
                error_reporting(E_ERROR | E_WARNING | E_PARSE);
                if ($_SESSION['usuarioId'] == '') {
                    echo "<div class='col-xl-3 col-lg-2 col-md-3'>";
                    echo "<ul class='top_tools'>";
                    echo "<li>";
                    echo "<div class='dropdown dropdown-access'>";
                    echo "<a href='login.php' class='access_link'><span>Conta</span></a>";
                    echo "<div style='margin-left: -170px' class='dropdown-menu'>";
                    echo "<a href='login.php' class='btn_1'>Entrar ou cadastrar</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</li>";
                    echo "</ul>";
                    echo "</div>";
                } else {
                    session_start();
                    echo "<div class='col-xl-3 col-lg-2 col-md-3'>";
                    echo "<ul style='margin-left:-210px;' class='top_tools'>";

                    echo "<li>";
                    echo "<div class='dropdown dropdown-access'>";
                    echo "<a href='conta.php' class='access_link'><span>Conta</span></a>";

                    echo "<div style='margin-left: -170px' class='dropdown-menu'>";
                    echo "<a href='areasocio.php' style='background-color: #653C7D !important;; margin-bottom: 10px; color:#fff !important' class='btn_1'>Área do sócio</a>";
                    echo "<a href='functions/sair.php' style='background-color: #B20000 !important; color:#fff !important' class='btn_1'>Sair</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</li>";
                    echo "</ul>";
                    echo "</div>";


                }
                ?>


            </div>
        </div>
        <div class="search_mob_wp">
            <input type="text" class="form-control" placeholder="Search over 10.000 products">
            <input type="submit" class="btn_1 full-width" value="Search">
        </div>
    </div>
</header>
