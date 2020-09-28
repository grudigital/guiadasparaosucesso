<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 76%">Nome</th>
                <th style="width: 22%">Data do comentário</th>
                <th style="width: 2%"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * from anunciantes_orcamento";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[nome]</td>";
                echo "<td>$row[datacontato]</td>";
                echo "<td><a href='anunciantes_orcamento_visualizar.php?id=$row[id]'><button type='button' class='btn btn-info'>Visualizar</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>