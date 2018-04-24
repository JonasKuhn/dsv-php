<h2>Patrocinadores</h2>
<hr>

<table border="1" width="95%">
    <thead>
        <tr>
            <th class="col5">
                <span>
                    <a href="?url=patroc_inc">
                        <img src="../img/icon-novo-arquivo.png" alt="novo" title="NOVO">
                    </a>
                </span>
            </th>
            <th>Cod. Patrocinadores</th>
            <th>Razão Social</th>
            <th>Sigla</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../conexao/conexao.php';
        $sql = "select * from tb_patrocinadores";
        //mandando para o banco de dados o comando de $sql//
        $query = $mysqli->query($sql);

        //retorna o numero de registros da tabela
        //$contador = $query->num_rows;

        while ($dados = $query->fetch_array()) {
            $cod = $dados['cod_patrocinadores'];
            $siglaPatrocinador = $dados['sigla_patrocinadores'];
            $nomePatrocinador = $dados['nome_patrocinadores'];
            $contador ++;
            ?>
            <tr>
                <td class="col1">
                    <span>
                        <a href="#"><img src="../img/icon-editar.png" alt="editar" title="EDITAR"></a>
                        <a href="#"><img src="../img/icon-lixo.png" alt="apagar" title="APAGAR"></a>
                    </span>
                </td>
                <td class="col2"><?= $cod ?></td>
                <td class="col3"><?= "$nomePatrocinador" ?></td>
                <td class="col4"><?= "$siglaPatrocinador" ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="4" class="total">Total Registros: <?= $contador ?></td>
        </tr>
    </tbody>
</table>
