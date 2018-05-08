<h2>Alterar Localização</h2>
<hr>
<?php
 include '../conexao/conexao.php';
    $id = $_GET['id']; //pega o valor na url
    $sql = "select * from tb_localizacao where cod_localizacao = $id;";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();
    //
    $endereco = $dados['rua'];
    $bairro = $dados['bairro'];
    $cidade = $dados['cidade'];
    $cep = $dados['cep'];
    $nomeLocal = $dados['nome_local'];
    $numero = $dados['numero'];
?>
<form name="cadastro" action="localizacao_opcoes/loc_altBD.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data">           
    <table border="0" width="50%" align="center">
        <tr>
            <td>CAMPOS</td>
            <td>VALORES</td>
        </tr>
        <tr>
            <td>Rua: </td>
            <td><input type="text" name="rua" value="<?= $endereco ?>" required/></td>
        </tr>
        <tr>
            <td>Bairro: </td>
            <td><input type="text" name="bairro" value="<?= $bairro ?>" required/></td>
        </tr>
        <tr>
            <td>Cidade: </td>
            <td><input type="text" name="cidade" value="<?= $cidade ?>" required/></td>
        </tr>
        <tr>
            <td>CEP:</td>
            <td><input type="text" name="cep" value="<?= $cep ?>" required/></td>
        </tr>
        <tr>
            <td>Nome do Local: </td>
            <td><input type="text" name="nome_local" value="<?= $nomeLocal ?>" required/></td>
        </tr>
        <tr>
            <td>Número: </td>
            <td><input type="text" name="numero" value="<?= $numero ?>" required/></td>
        </tr>
        <tr>
            <td align='right' colspan='2'><input type="submit" value="Enviar" name="enviar" /></td>
        </tr>
    </table>    
</form>