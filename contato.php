<!DOCTYPE html>
<html lang="pt-BR">

<?php include 'includes/head.php';?>


<body>
	
	<div id="page">

        <?php include 'includes/header.php';?>


        <main class="bg_gray">
	
			<div class="container margin_60">
				<div style="margin-bottom: -30px" class="main_title">
					<h2>Entre em contato</h2>
					<p>Vamos adorar receber uma mensagem ou ligação sua.</p>
				</div>
			</div>
		<div class="bg_white">
			<div class="container margin_60_35">
				<h4 class="pb-3">Envie uma mensagem</h4>
				<div class="row">
					<div class="col-lg-12 col-md-12 add_bottom_25">
                        <form action="functions/contatos_adicionar.php" enctype="multipart/form-data" method="post">
                        <div class="form-group">
							<input class="form-control" type="text" name="nome" placeholder="Nome *">
						</div>
						<div class="form-group">
							<input class="form-control" type="text" name="telefone" placeholder="Telefone *">
						</div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="E-mail *">
                        </div>
                        <input type="hidden" value="2" name="status">
						<div class="form-group">
							<textarea class="form-control" name="mensagem" style="height: 150px;" placeholder="Mensagem *"></textarea>
						</div>
						<div class="form-group">
							<input class="btn_1 full-width" type="submit" value="Enviar">
						</div>
                        </form>
                    </div>
<!--					<div class="col-lg-8 col-md-6 add_bottom_25">-->
<!--					<iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39714.47749917409!2d-0.13662037019554393!3d51.52871971170425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondra%2C+Regno+Unito!5e0!3m2!1sit!2ses!4v1557824540343!5m2!1sit!2ses" style="border: 0" allowfullscreen></iframe>-->
<!--					</div>-->
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