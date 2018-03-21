<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>1º Torneio de Volêi de Areia - Cageti</title>
        <link rel="shortcut icon" href="../img/ico.png" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link rel="stylesheet" href="../css/main-responsivo.css" type="text/css">
        <script type="text/javascript" src="../jquery-3.2.1.js"></script>
    </head>
    <body>
        <div class="menu-cabecalho"><!--BaraMenu -->
            <?php
            include ('./menu.php');
            ?>
        </div><!--Fim baraMenu-->
        
        <div class="principal-conteudo"><!--Principal -->
            <?php
            
            $local = "AABB(Associação Atlética Banco do Brasil)";
            $url = $_GET['url'];
            
            switch ($url){
                case 'cronograma': include ('./cronograma.php');break;
                case 'contato': include ('./descricao.php'); break;
                case 'patrocinadores': include ('./patrocinadores.php'); break;
                case 'descricao': include ('./descricao.php'); break;
                default : include ('./descricao.php');
            }           
            
            ?>
        </div><!--Fim Principal-->

        <div class="rodape">
            <?php
            include ('./rodape.php');
            ?>
        </div> 
    </body>
</html>
