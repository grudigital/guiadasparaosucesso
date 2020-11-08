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
                        <li><a href="areasocio.php">Área do sócio</a></li>
                        <li>Informações da conta</li>
                    </ul>
                </div>
                <h1>Gerencie os dados da sua conta</h1>

            </div>
            <form class="card-body" action="functions/areasocio_informacoes_atualizar.php"
                  enctype="multipart/form-data"
                  method="post">

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="step first">
                        <h3>Informações de acesso</h3>

                        <div class="tab-content checkout">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">

                                <?php
                                require("admin/connections/conn.php");
                                $pegaid = $_SESSION['usuarioId'];
                                $sql = "select id,titulo,categoria,telefone,logradouro,numero,bairro,complemento,cep,datanascimento,cidade,estado,whatsapp,email,facebook,instagram,linkedin,descricao,senha FROM anunciantes where id = '$pegaid'";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo "<input class='form-control' name='id' type='hidden' value='$row[id]'
                                                   id='example-text-input'>";

                                    echo "<div class='row no-gutters'>";
                                    echo "<div class='col-6 form-group pr-1'>";
                                    echo "<p style='margin-bottom: 2px'>E-mail:</p>";
                                    echo "<input type='text' class='form-control' name='email' value='$row[email]'>";
                                    echo "</div>";
                                    echo "<div class='col-6 form-group pl-1'>";
                                    echo "<p style='margin-bottom: 2px'>Data de Nascimento:</p>";
                                    echo "<input type='date' class='form-control' name='datanascimento' value='$row[datanascimento]'>";
                                    echo "</div>";
                                    echo "</div>";

                                    echo "<div class='row no-gutters'>";
                                    echo "<div class='col-12 form-group pr-1'>";
                                    echo "<p style='margin-bottom: 2px'>Título:</p>";
                                    echo "<input type='text' class='form-control' name='titulo' value='$row[titulo]'>";
                                    echo "</div>";
                                    echo "</div>";

                                    echo "<div class='form-group'>";
                                    echo "<p style='margin-bottom: 2px'>Descrição:</p>";
                                    echo "<input type='text' name='descricao' value='$row[descricao]' class='form-control'>";
                                    echo "</div>";



                                }
                                mysqli_close($conn);
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="step middle payments">
                        <h3>Endereço e contatos</h3>
                        <div class="tab-content checkout">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                                <?php
                                require("admin/connections/conn.php");
                                $pegaid = $_SESSION['usuarioId'];
                                $sql = "select id,titulo,categoria,telefone,logradouro,numero,bairro,complemento,cep,datanascimento,cidade,estado,divulgaendereco,inicioplano,fimplano,whatsapp,email,facebook,instagram,linkedin,descricao,senha,imagem,video,status FROM anunciantes where id = '$pegaid'";
                                $result = mysqli_query($conn, $sql);
                                
                                $sqlcategoriaselecionada = "select * from anunciantes where id = '$pegaid'";
                                    $resultcategoriaselecionada = mysqli_query($conn,$sqlcategoriaselecionada);

                                    
                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo "<div class='row no-gutters'>";
                                    echo "<div class='col-8 form-group pr-1'>";
                                    echo "<p style='margin-bottom: 2px'>Logradouro:</p>";
                                    echo "<input type='text' class='form-control' name='logradouro' value='$row[logradouro]'>";
                                    echo "</div>";
                                    echo "<div class='col-4 form-group pl-1'>";
                                    echo "<p style='margin-bottom: 2px'>Numero:</p>";
                                    echo "<input type='text' class='form-control' name='numero' value='$row[numero]'>";
                                    echo "</div>";
                                    
                                    echo "</div>";

                                    echo "<div class='row no-gutters'>";
                                    echo "<div class='col-4 form-group pr-1'>";
                                    echo "<p style='margin-bottom: 2px'>Bairro:</p>";
                                    echo "<input type='text' class='form-control' name='bairro' value='$row[bairro]'>";
                                    echo "</div>";
                                    echo "<div class='col-4 form-group pl-1'>";
                                    echo "<p style='margin-bottom: 2px'>Complemento:</p>";
                                    echo "<input type='text' class='form-control' name='complemento' value='$row[complemento]'>";
                                    echo "</div>";
                                    echo "<div class='col-4 form-group pl-1'>";
                                    echo "<p style='margin-bottom: 2px'>Cep:</p>";
                                    echo "<input type='text' class='form-control' name='cep' value='$row[cep]'>";
                                    echo "</div>";
                                    echo "</div>";





                                echo "<div class='row no-gutters'>";
                                    echo "<div class='col-5 form-group pr-1'>";
                                        echo "<p style='margin-bottom: 2px'>Cidade:</p>";
                                        echo "<input type='text' class='form-control' name='cidade' value='$row[cidade]'>";
                                        echo "</div>";
                                    echo "<div class='col-2 form-group pl-1'>";
                                        echo "<p style='margin-bottom: 2px'>Estado:</p>";
                                        echo "<input type='text' class='form-control' name='estado' value='$row[estado]'>";
                                        echo "</div>";
                                        echo "<div class='col-5 form-group pl-1'>";
                                    echo "<p style='margin-bottom: 2px'>Divulgar endereco?</p>";
                                    echo "<select name='divulgaendereco' class='form-control'>";
                                    while ($retornocategoriaselecionada = mysqli_fetch_array($resultcategoriaselecionada)){
                                            echo "<option style='background-color: #791F5D; color: #fff' selected value='$retornocategoriaselecionada[divulgaendereco]'>$retornocategoriaselecionada[divulgaendereco]</option>";
                                        }
                                    
                                    echo "<option value='sim'>Sim</option>";
                                    echo "<option value='nao'>Não</option>";
                                    echo "<select>";
                                    
                                    echo "</div>";
                                    echo "</div>";
                                }
                                mysqli_close($conn);
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="step last">
                        <h3>Mídias sociais e telefone</h3>
                        <div class="tab-content checkout">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">


                                <?php
                                require("admin/connections/conn.php");
                                $pegaid = $_SESSION['usuarioId'];
                                $sql = "select id,titulo,categoria,telefone,logradouro,numero,bairro,cidade,estado,inicioplano,fimplano,whatsapp,email,facebook,instagram,linkedin,descricao,senha,imagem,video,status FROM anunciantes where id = '$pegaid'";
                                $result = mysqli_query($conn, $sql);

                                while ($row = mysqli_fetch_assoc($result)) {

                                echo "<div class='row no-gutters'>";
                                    echo "<div class='col-6 form-group pr-1'>";
                                        echo "<p style='margin-bottom: 2px'>Telefone:</p>";
                                        echo "<input type='text' class='form-control' name='telefone' value='$row[telefone]'>";
                                        echo "</div>";
                                    echo "<div class='col-6 form-group pl-1'>";
                                        echo "<p style='margin-bottom: 2px'>Whatsapp:</p>";
                                        echo "<input type='text' class='form-control' name='whatsapp' value='$row[whatsapp]'>";
                                        echo "</div>";
                                    echo "</div>";

                                echo "<div class='row no-gutters'>";
                                    echo "<div class='col-6 form-group pr-1'>";
                                        echo "<p style='margin-bottom: 2px'>Facebook:</p>";
                                        echo "<input type='text' class='form-control' name='facebook' value='$row[facebook]'>";
                                        echo "</div>";
                                    echo "<div class='col-6 form-group pl-1'>";
                                        echo "<p style='margin-bottom: 2px'>Instagram:</p>";
                                        echo "<input type='text' class='form-control' name='instagram' value='$row[instagram]'>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "<div class='form-group'>";
                                    echo "<p style='margin-bottom: 2px'>Linkedin:</p>";
                                    echo "<input type='text' name='linkedin' value='$row[linkedin]' class='form-control'>";
                                    echo "</div>";

                                }
                                mysqli_close($conn);
                                ?>


                            </div>

                        </div>


                    </div>

                    <!-- /step -->
                </div>
                <button style="float: right" type='submit' class='btn_1 full-width'>Atualizar</button>

            </div>
            </form>
        </div>
        <!-- /container -->
    </main>
    <!--/main-->

    <?php include 'includes/footer.php'; ?>

</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->
<!-- Modal Payments Method-->
<div class="modal fade" id="payments_method" tabindex="-1" role="dialog" aria-labelledby="payments_method_title"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="payments_method_title">Payments Methods</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, oratio possim ius cu. Labore prompta nominavi sea ei. Sea no animal
                    saperet gloriatur, ius iusto ullamcorper ad. Qui ignota reformidans ei, vix in elit conceptam
                    adipiscing, quaestio repudiandae delicatissimi vis ei. Fabulas accusamus no has.</p>
                <p>Et nam vidit zril, pri elaboraret suscipiantur ut. Duo mucius gloriatur at, in vis integre labitur
                    dolores, mei omnis utinam labitur id. An eum prodesset appellantur. Ut alia nemore mei, at velit
                    veniam vix, nonumy propriae conclusionemque ea cum.</p>
            </div>
        </div>
    </div>
</div>

<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.min.js"></script>
<script src="js/main.js"></script>

<script>
    // Other address Panel
    $('#other_addr input').on("change", function () {
        if (this.checked)
            $('#other_addr_c').fadeIn('fast');
        else
            $('#other_addr_c').fadeOut('fast');
    });
</script>

</body>
</html>