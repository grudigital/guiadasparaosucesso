<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 40%">Nome</th>
                <th style="width: 20%">Telefone</th>
                <th style="width: 20%">Data</th>
                <th style="width: 4%">Visualizar</th>
                <th style="width: 16%">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select * FROM contatos";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[nome]</td>";
                echo "<td>$row[telefone]</td>";
                echo "<td>$row[datacontato]</td>";
                echo "<td><a href='contatos_visualizar.php?id=$row[id]'><button type='button' class='btn btn-info'>Visualizar</button></a></td>";
                if($row['status']==1){
                    echo "<td><a href='functions/contatos_status1.php?id=$row[id]'><button type='button' class='btn btn-success'>Respondido</button></a></td>";
                }else {
                    echo "<td><a href='functions/contatos_status2.php?id=$row[id]'><button type='button' class='btn btn-danger'>Não respondido</button></a></td>";
                }


                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>