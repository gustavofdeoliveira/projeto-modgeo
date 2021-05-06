<?php
include_once("../control/conexao.php");
require_once("../dao/ParametrosSondagemDAO.php");
require_once("../dao/TipoOcorrenciaSondagemDAO.php");
?>
<!DOCTYPE html>
<html lang="tt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/icon/logo-modgeo-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'><!-- fonte do site-->
    <link rel="stylesheet" href="../css/index.css">
    <title>Relatório de Sondagens</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="logo-nav"><img src="img/icon/logo-modgeo-navbar.png" alt=""></a>
                </div>

                <div class="collapse navbar-collapse ">
                    <ul class="nav navbar-nav navbar-right navbar">
                        <li><a href="#home">Sobre o ModGeo 3.0</a></li>
                        <li><a href="#about">Como usar o ModGeo 3.0</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="well container">        
            <h1>Parâmetros da Sondagem: </h1>
            <?php
            $dao = new ParametrosSondagemDAO();
            $dados = $dao->listarParametrosSondagem($_SESSION["id"]);
            ?>
            <?php
            foreach ($dados as $dado) {
                
                echo "
                <div class='form-group'>
                    <ul> 
                        <li>
                            Alteração:  ". $dado -> alteracao ."                  
                        </li>         
                        <li>
                            Consistência: ". $dado -> consistencia ."
                        </li>      
                        <li>
                            Fraturamento: ". $dado -> fraturamento ."
                        </li>
                        <li>
                            RQD: ". $dado -> rqd ."
                        </li>
                    </ul>
                </div>
                ";
            }
            ?>     
            <h1>Tipo de Ocorrência na Sondagem: </h1>
            <?php
            $dao = new TipoOcorrenciaSondagemDAO();
            $dados = $dao->listarOcorrenciasSondagem($_SESSION["id"]);
            ?>
            <?php
            foreach ($dados as $dado) {
                
                echo "
                <div class='form-group'>
                    <ul> 
                        <li>
                            Profundidade Mínima:  ". $dado -> profundidade_min ."                  
                        </li>         
                        <li>
                            Produnidade Máxima: ". $dado -> profundidade_max ."
                        </li>      
                        <li>
                            Tipo de Ocorrência: ". $dado -> tipo_rocha ."
                        </li>
                        <li>
                            Hachuras: ". $dado -> hachuras ."
                        </li>
                        <li>
                            Cor: ". $dado -> cor ."
                        </li>
                    </ul>
                </div>
                ";
            }
            ?>            

    </div>
</body>
<script type="text/javascript" src="../javascript/index.js"></script>

</html>