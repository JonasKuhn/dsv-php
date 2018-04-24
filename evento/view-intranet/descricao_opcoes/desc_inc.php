<h2>Nova Descrição</h2>
<hr>

<form name="cadastro" action="descricao_opcoes/desc_incBD.php" method="POST" enctype="multipart/form-data">
    <table border="0" width="50%" align="center">
        <tbody>
            <tr>
                <td>CAMPOS</td>
                <td>VALORES</td>
            </tr>
            <tr>
                <td align="rigth">Nome Evento:</td>
                <td><input type="text" name="nome_evento" value="" required/></td>
            </tr>
            <tr>
                <td>Data Evento:</td>
                <td><input type="date" name="data_evento" value="" required/></td>
            </tr>
            <tr>
                <td>Descrição Evento:</td>
                <td><input type="text" name="descricao_evento" value="" required/></td>
            </tr>
            <tr>
                <td>Valor Inscrição:</td>
                <td><input type="text" name="valor_evento" value="" required/></td>
            </tr>
            <tr>
                <td align='right' colspan='2'><input type="submit" value="Enviar" name="enviar" /></td>
            </tr>
        </tbody>
    </table>
</form>