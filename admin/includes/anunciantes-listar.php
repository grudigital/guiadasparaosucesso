<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 20%">Titulo</th>
                <th style="width: 18%"></th>
                <th style="width: 2%"></th>
                <th style="width: 40%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM anunciantes";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><p style='font-size: 11px'>$row[titulo]</p></td>";
                if($row['status'] == 1){
                    echo "<td><a href='functions/anunciantes_status1.php?id=$row[id]'><button type='button' style='font-size: 11px' class='btn btn-success'>Liberado</button></a></td>";
                }
                else {
                    echo "<td><a href='functions/anunciantes_status2.php?id=$row[id]'><button type='button' style='font-size: 11px' class='btn btn-danger'>Bloqueado</button></a></td>";
                }
                echo "<td><a href='anunciantes_logotipo.php?id=$row[id]'><button type='button' style='font-size: 11px' class='btn btn-secondary'>Logotipo</button></a></td>";
                if($row['senha'] == 'fd4b685eb84bf2ba0c26fd3c82f577b5'){
                    echo "<td><p style='font-size:11px; text-align: center; font-weight: bold; margin-top: 5px; color: #9b111E'>Senha padrão</p></td>";
                }else{
                    echo "<td><a href='functions/resetarsenha.php?id=$row[id]'><button type='button' style='font-size: 11px' class='btn btn-danger'>Resetar senha</button></a></td>";
                }
                echo "<td><a href='anunciantes_imagem.php?id=$row[id]'><button type='button' style='font-size: 11px' class='btn btn-primary'>Imagem</button></a></td>";
                echo "<td><a href='anunciantes_editar.php?id=$row[id]'><button type='button' style='font-size: 11px' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='anunciantes_video.php?id=$row[id]'><button type='button' style='font-size: 11px' class='btn btn-secondary'>Vídeo</button></a></td>";
                echo "<td><a href='anunciantes_fotos.php?id=$row[id]'><button type='button' style='font-size: 11px' class='btn btn-dark'>Imagens</button></a></td>";
                echo "<td><a href='anunciantes_comentarios.php?id=$row[id]'><button type='button' style='font-size: 11px' class='btn btn-info'>Comentários</button></a></td>";
                echo "<td><a href='anunciantes_orcamentos.php?id=$row[id]'><button type='button' style='font-size: 11px' class='btn btn-secondary'>Orçamentos</button></a></td>";
                echo "<td><a href='functions/anunciantes_excluir.php?id=$row[id]'><button type='button' style='font-size: 11px' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>