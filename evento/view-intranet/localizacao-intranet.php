<h2>Localização</h2>
<hr>

<table border="1" width="95%">
    <thead>
        <tr>
            <th class="col5">
                <span>
                    <a href="?url=loc_inc"><img src="../img/icon-novo-arquivo.png" alt="novo" title="Incluir registro"></a>
                </span>
            </th>
            <th>Cod. Localização</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>CEP</th>
            <th>Número</th>
            <th>Descrição do Local</th>
        </tr>
    </thead>
    <tbody>
        <!--
        buscar os dados na tabela do banco de dados
        -->
        <?php
        include '../conexao/conexao.php';
        $sql = "select * from tb_localizacao";
        //mandando para o banco de dados o comando de $sql//
        $query = $mysqli->query($sql);
        
        //retorna o numero de registros da tabela
        //$contador = $query->num_rows;

        while ($dados = $query->fetch_array()) {
            $cod = $dados['cod_localizacao'];
            $rua = $dados['rua'];
            $bairro = $dados['bairro'];
            $cidade = $dados['cidade'];
            $cep = $dados['cep'];
            $numero = $dados['numero'];
            $nomeLocal = $dados['nome_local'];
            $contador ++;
            ?>
        <tr>
            <td class="col1">
                <span>
                    <a href="?url=loc_alt&id=<?=$cod?>"><img src="../img/icon-editar.png" alt="editar" title="EDITAR"></a>
                    <a href="#"><img src="../img/icon-lixo.png" alt="apagar" title="APAGAR"></a>
                </span>
            </td>
            <td class="col2"><?=$cod?></td>
            <td class="col3"><?=$rua?></td>
            <td class="col4"><?=$bairro?></td>
            <td class="col1"><?=$cidade?></td>
            <td class="col2"><?=$cep?></td>
            <td class="col3"><?=$numero?></td>
            <td class="col4"><?=$nomeLocal?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="8" class="total">Quantidade de registros: <?=$contador?></td>
            
        </tr>
    </tbody>
</table>
