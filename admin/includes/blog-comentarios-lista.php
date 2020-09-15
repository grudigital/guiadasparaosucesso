<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 58%">Publicação</th>
                <th style="width: 18%">Nome</th>
                <th style="width: 20%">Data do comentário</th>
                <th style="width: 2%">Status</th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * from blog_comentarios";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[publicacao]</td>";
                echo "<td>$row[nome]</td>";
                echo "<td>$row[datacomentario]</td>";
                if ($row['status'] == '1') {
                    echo "<td><a href='functions/blog_status_comentarios1.php?id=$row[id]'><button type='button' class='btn btn-success'>Liberado</button></a></td>";
                } else {
                    echo "<td><a href='functions/blog_status_comentarios2.php?id=$row[id]'><button type='button' class='btn btn-danger'>Bloqueado</button></a></td>";
                }
                echo "<td><a href='publicacoes_comentarios_visualizar.php?id=$row[id]'><button type='button' class='btn btn-info'>Visualizar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>