<?php
include ('../conexao/conexao.php');

$sql = "select nome_evento,data,descricao_evento,valor_inscricao"
        . " from tb_informacao";

//mandando para o banco de dadoso comando de $sql//
$query = $mysqli->query($sql);

$dados = $query->fetch_array();
$nomeEvento = $dados['nome_evento'];
$data = $dados['data'];
$descricao_evento = $dados['descricao_evento'];
$valor_inscricao = $dados['valor_inscricao'];

$dt_separacao= explode("-",$dados['data']);
switch ($dt_separacao[1]) {
    case 1:$dt = "Janeiro"; break;
    case 2:$dt = "Fevereiro"; break;
    case 3:$dt = "Março"; break;
    case 4:$dt = "Abril"; break;
    case 5:$dt = "Maio"; break;
    case 6:$dt = "Junho"; break;
    case 7:$dt = "Julho"; break;
    case 8:$dt = "Agosto"; break;
    case 9:$dt = "Setembro"; break;
    case 10:$dt = "Outubro"; break;
    case 11:$dt = "Novembro"; break;
    case 12: $dt = "Dezembro"; break;
}
$data_inicio=$dt_separacao[2]." de ".$dt." de ".$dt_separacao[0];

?>
<div class="conteudo">
    <hr>
    <h1><?php echo "$nomeEvento" ?><br></h1>
    <div class="data">
        <img src="../img/icon-calendario.jpg" alt="icon-calendario" name="Calendario"> 
        <span><?= $data_inicio ?></span>
    </div>
    <div class="topico">
        <span><p>&emsp;<?= $descricao_evento?></p></span>
    </div>
</div>