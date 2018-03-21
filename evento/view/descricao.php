<?php
include ('../conexao/conexao.php');

$sql = "select nome_evento,data_inicio,data_fim"
        . " from inicial";
//mandando para o banco de dadoso comando de $sql//
$query = $mysqli->query($sql);

$dados = $query->fetch_array();
$nomeEvento = $dados['nome_evento'];
$dataInicio = $dados['data_inicio'];
$dataFim = $dados['data_fim'];

$reverse = implode( '/', array_reverse( explode( '-', $dataInicio ) ) );
?>
<div class="conteudo">
    <hr>
    <h1><?php echo "$nomeEvento" ?><br></h1>
    <div class="data">
        <img src="../img/icon-calendario.jpg" alt="icon-calendario" name="Calendario"> 
        <span><?php echo "$reverse" ?></span>
    </div>
    <div class="topico">
        <p class="evento-item">&emsp;DESCRIÇÃO DO EVENTO</p>  
        <p>&emsp;O 1º torneio de Vôlei de areia é um evento que foi motivado e organizado pelo
            CAGETI (Centro Acadêmico da Gestão da Tecnologia da Informação) junto da coordenação do curso.</p>
        <p>&emsp;Esse evento possuí o intuito de reunir atletas do próprio curso além de todo o pessoal que tiver interesse. </p>
        <p>&emsp;Será um evento para motivar as pessoas a realizarem atividades físicas e também trabalhar a relação de trabalho em equipe.</p>
        <p>&emsp;Serão compoetições entre duplas que por fim tera uma premiação para as tres duplas vencedoras.</p>
    </div>
</div>