<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>1º Torneio de Volêi de Areia - Cageti</title>
        <link rel="shortcut icon" href="../img/ico.png" type="image/x-icon" />
        <link rel="stylesheet" href="../css/main.css" type="text/css">
    </head>
    <body>
        <div class="corpo"><!--Corpo-->
            <div class="cabecalho"><!--Cabecalho-->
                <?php
                    include ('./cabecalho.php');
                ?>
            </div><!--Fim Cabecalho-->
            
            <div class="menu"><!--BaraMenu -->
                <?php
                    include ('./menu.php');
                ?>
            </div><!--Fim baraMenu-->
            
            <div class="logoTipo">
                <a href="index.php"><img id="img-cabecalho" src="../img/logo-cageti.png" alt="imagem" name="icon-logo"></a>
            </div>

            <div class="principal"><!--Principal -->
                <?php
                    include ('./inicial.php');
                ?>
            </div><!--Fim Principal-->
        </div><!--Fecha Corpo-->
    </body>
</html>
