<h2>Nova Localização</h2>
<hr>

<form name="cadastro" action="localizacao_opcoes/loc_incBD.php" method="POST" enctype="multipart/form-data">           
    <table border="0" width="50%" align="center">
        <tr>
            <td>CAMPOS</td>
            <td>VALORES</td>
        </tr>
        <tr>
            <td>Rua: </td>
            <td><input type="text" name="rua" value="" required/></td>
        </tr>
        <tr>
            <td>Bairro: </td>
            <td><input type="text" name="bairro" value="" required/></td>
        </tr>
        <tr>
            <td>Cidade: </td>
            <td><input type="text" name="cidade" value="" required/></td>
        </tr>
        <tr>
            <td>CEP:</td>
            <td><input type="text" name="cep" value="" required/></td>
        </tr>
        <tr>
            <td>Nome do Local: </td>
            <td><input type="text" name="nome_local" value="" required/></td>
        </tr>
        <tr>
            <td>Número: </td>
            <td><input type="text" name="numero" value="" required/></td>
        </tr>
        <tr>
            <td align='right' colspan='2'><input type="submit" value="Enviar" name="enviar" /></td>
        </tr>
    </table>    
</form>