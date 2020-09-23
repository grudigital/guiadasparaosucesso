<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 60%">Titulo</th>
                <th style="width: 34%">Página</th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>
                <th style="width: 2%"></th>

            </tr>
            </thead>
            <tbody>
            <?php
            require("connections/conn.php");
            $sql = "select b.id bid, b.titulo btitulo, b.pagina bpagina, b.resumo bresumo, b.texto btexto, b.imagem bimagem, bp.id bpid, bp.pagina bppagina FROM blocos as b inner join blocos_paginas as bp on b.pagina = bp.id";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[btitulo]</td>";
                echo "<td>$row[bppagina]</td>";
                echo "<td><a href='blocos_editar.php?id=$row[bid]'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
                echo "<td><a href='blocos_imagem.php?id=$row[bid]'><button type='button' class='btn btn-info'>Imagem</button></a></td>";
                echo "<td><a href='functions/blocos_excluir.php?id=$row[bid]'><button type='button' class='btn btn-danger'>Excluir</button></a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>