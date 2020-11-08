<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table  table-striped">
            <thead>
            <tr>
                <th style="width: 20%">Nome</th>
                <th style="width: 15%">E-mail</th>
                <th style="width: 15%">Telefone</th>
                <th style="width: 60%">Mensagem</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $pegaid = $_SESSION['usuarioId'];

            require("admin/connections/conn.php");
            $sql = "select * from anunciantes_orcamento where anunciante = '$pegaid' ";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>$row[nome]</td>";
                echo "<td>$row[email]</td>";
                echo "<td>$row[telefone]</td>";
                echo "<td>$row[mensagem]</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>