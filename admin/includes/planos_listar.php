<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 60%">Titulo</th>
                <th style="width: 26%">Valor</th>
                <th style="width: 8%">Status</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM planos";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[titulo]</td>";
                echo "<td>$row[valor]</td>";
                if($row['status'] == 1){
                    echo "<td><a href='functions/planos_status1.php?id=$row[id]'><button type='button' class='btn btn-success'>Ativo</button></a></td>";
                }
                else {
                    echo "<td><a href='functions/planos_status2.php?id=$row[id]'><button type='button' class='btn btn-danger'>Inativo</button></a></td>";
                }
                echo "<td><a href='planos_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='planos_imagem.php?id=$row[id]'><button type='button' class='btn btn-info'>Imagem</button></a></td>";
                echo "<td><a href='functions/planos_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>