<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 45%">Titulo</th>
                <th style="width: 30%">Local</th>
                <th style="width: 19%">Status</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select b.id bid, b.local blocal, b.titulo btitulo, b.imagem bimagem, b.link blink, b.status bstatus, b.datacadastro bdatacadastro, l.id lid, l.local llocal from banners as b inner join banners_local as l on b.local = l.id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[btitulo]</td>";
                echo "<td style='font-size:12px'>$row[llocal]</td>";
                if($row['bstatus'] == 1){
                    echo "<td><a href='functions/banners_status1.php?id=$row[bid]'><button type='button' class='btn btn-success'>Publicado</button></a></td>";
                }
                else {
                    echo "<td><a href='functions/banners_status2.php?id=$row[bid]'><button type='button' class='btn btn-danger'>Não publicado</button></a></td>";
                }
                echo "<td><a href='banners_editar.php?id=$row[bid]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='banners_imagem.php?id=$row[bid]'><button type='button' class='btn btn-info'>Imagem</button></a></td>";
                echo "<td><a href='functions/banners_excluir.php?id=$row[bid]'><button type='button' class='btn btn-danger'>Excluir</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>