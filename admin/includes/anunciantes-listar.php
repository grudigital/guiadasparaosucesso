<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 50%">Titulo</th>
                <th style="width: 23%">Categoria</th>
                <th style="width: 15%"></th>
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
                echo "<td>$row[titulo]</td>";
                echo "<td>$row[categoria]</td>";
                if($row['status'] == 1){
                    echo "<td><a href='functions/anunciantes_status1.php?id=$row[id]'><button type='button' class='btn btn-success'>Liberado</button></a></td>";
                }
                else {
                    echo "<td><a href='functions/anunciantes_status2.php?id=$row[id]'><button type='button' class='btn btn-danger'>Bloqueado</button></a></td>";
                }
                echo "<td><a href='anunciantes_imagem.php?id=$row[id]'><button type='button' class='btn btn-primary'>Imagem</button></a></td>";
                echo "<td><a href='anunciantes_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='anunciantes_video.php?id=$row[id]'><button type='button' class='btn btn-secondary'>Vídeo</button></a></td>";
                echo "<td><a href='anunciantes_comentarios.php?id=$row[id]'><button type='button' class='btn btn-info'>Comentários</button></a></td>";
                echo "<td><a href='anunciantes_orcamentos.php?id=$row[id]'><button type='button' class='btn btn-secondary'>Orçamentos</button></a></td>";
                echo "<td><a href='functions/anunciantes_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>