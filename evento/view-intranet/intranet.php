<html>
    <head>
        <meta charset="UTF-8">
        <title>Intranet</title>
        <link rel="stylesheet" type="text/css" href="../css/main-intranet.css">
        <link rel="shortcut icon" href="../img/ico.png" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" 
              rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    </head>
    <body>
        <div class="conteudo-principal">
            <div class="cabecalho">
                <?php
                include '../view-intranet/cabecalho-intranet.php';
                ?>
            </div>
            <div class="menu">
                <?php
                include '../view-intranet/menu-intranet.php';
                ?>
            </div>
            <div class="principal">
                <?php
                $url = $_GET['url'];

                switch ($url) {
                    case 'localizacao': include ('./localizacao-intranet.php');
                        break;
                    case 'patrocinadores': include ('./patrocinadores-intranet.php');
                        break;
                    case 'descricao': include ('./descricao-intranet.php');
                        break;
                    case 'loc_inc': include ('./localizacao_opcoes/loc_inc.php');
                        break;
                    case 'loc_alt': include ('../view-intranet/localizacao_opcoes/loc_alt.php');
                        break;
                    case 'loc_exc': include ('../view-intranet/localizacao_opcoes/loc_exc.php');
                        break;
                    case 'patroc_alt': include ('../view-intranet/patrocinadores-opcoes/patroc_alt.php');
                        break;
                    case 'desc_inc': include ('../view-intranet/descricao_opcoes/desc_inc.php');
                        break;
                    case 'desc_alt': include ('../view-intranet/descricao_opcoes/desc_alt.php');
                        break;
                    case 'patroc_inc': include ('../view-intranet/patrocinadores-opcoes/patroc_inc.php');
                        break;
                    
                    default : include ('./descricao-intranet.php');
                }
                ?>
            </div>
            <div class="break"></div>
            <div class="rodape">
                <?php
                include'./rodape-intranet.php';
                ?>
            </div>
        </div>
    </body>
</html>
