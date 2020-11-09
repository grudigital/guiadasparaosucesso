<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 96%">Titulo</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM blog_categorias";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[categoria]</td>";
                echo "<td><a href='blog_categorias_editar.php?id=$row[id]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='functions/blog_categorias_excluir.php?id=$row[id]'><button type='button' class='btn btn-danger'>Deletar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>