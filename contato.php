<!DOCTYPE html>
<html lang="pt-BR">

<?php include 'includes/head.php';?>


<body>
	
	<div id="page">

        <?php include 'includes/header.php';?>


        <main class="bg_gray">
	
			<div class="container margin_60">
				<div class="main_title">
					<h2>Entre em contato</h2>
					<p>Vamos adorar receber uma mensagem ou ligação sua.</p>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-4">
						<div class="box_contacts">
							<h2>Contato por whatsapp</h2>
                            <div style="height: 50px">
                                <?php
                                require("admin/connections/conn.php");
                                $sql = "select id, telefone,email,instagram,facebook,telegram,youtube FROM informacoes where id = 1";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<a target='_blank' class='phone_top' href='https://api.whatsapp.com/send?phone=5511$row[telefone]'><strong>$row[telefone]</strong></a>";
                                }
                                mysqli_close($conn);
                                ?>
                            </div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="box_contacts">
							<h2>Mídias sociais</h2>
							<div style="height: 50px">
                                <?php
                                require("admin/connections/conn.php");
                                $sql = "select id, telefone,email,instagram,facebook,telegram,youtube FROM informacoes where id = 1";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo "<div class='col-lg-9'>";
                                    echo "<ul style='float:right' class='footer-selector clearfix'>";
                                    echo "<a target='_blank' href='$row[facebook]'><img style='float: left; width: 30px; margin-left:10px'  src='data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==' data-src='img/icone-facebook.png' alt='' class='lazy'></a>";
                                    echo "<a target='_blank' href='$row[instagram]'><img style='float: left; width: 30px; margin-left:10px'  src='data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==' data-src='img/icone-instagram.png' alt='' class='lazy'></a>";
                                    echo "<a target='_blank' href='$row[telegram]'><img style='float: left; width: 30px; margin-left:10px'  src='data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==' data-src='img/icone-telegram.png' alt='' class='lazy'></a>";
                                    echo "<a target='_blank' href='$row[youtube]'><img style='float: left; width: 30px; margin-left:10px'  src='data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==' data-src='img/icone-youtube.png' alt='' class='lazy'></a>";
                                    echo "</ul>";
                                    echo "</div>";
                                }
                                mysqli_close($conn);
                                ?>
                            </div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="box_contacts">
							<h2>Contato por e-mail</h2>
                            <div style="height: 50px">
                            <?php
                            require("admin/connections/conn.php");
                            $sql = "select id, telefone,email,instagram,facebook,telegram,youtube FROM informacoes where id = 1";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<a href='mailto:$row[email]'>$row[email]</a>";
                            }
                            mysqli_close($conn);
                            ?>
						</div>
						</div>
					</div>
				</div>
				<!-- /row -->				
			</div>
			<!-- /container -->
		<div class="bg_white">
			<div class="container margin_60_35">
				<h4 class="pb-3">Envie uma mensagem</h4>
				<div class="row">
					<div class="col-lg-4 col-md-6 add_bottom_25">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Nome *">
						</div>
						<div class="form-group">
							<input class="form-control" type="email" placeholder="E-mail *">
						</div>
						<div class="form-group">
							<textarea class="form-control" style="height: 150px;" placeholder="Mensagem *"></textarea>
						</div>
						<div class="form-group">
							<input class="btn_1 full-width" type="submit" value="Enviar">
						</div>
					</div>
					<div class="col-lg-8 col-md-6 add_bottom_25">
					<iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39714.47749917409!2d-0.13662037019554393!3d51.52871971170425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondra%2C+Regno+Unito!5e0!3m2!1sit!2ses!4v1557824540343!5m2!1sit!2ses" style="border: 0" allowfullscreen></iframe>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_white -->
	</main>
	<!--/main-->

        <?php include 'includes/footer.php';?>

        <!--/footer-->
    </div>
    <!-- page -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/carousel-home-2.js"></script>

</body>
</html>