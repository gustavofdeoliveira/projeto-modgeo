<?php
include_once("../control/conexao.php");
require_once("../dao/NomeSondagemDAO.php");
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
        <form action="../control/NomeSondagemControl.php" method="POST" class="form-group">
            <?php
            $dao = new NomeSondagemDAO();
            $dados = $dao->listarSondagens();
            ?>
            <?php
            foreach ($dados as $dado) {
                echo "
                <form action='../control/NomeSondagemControl.php' method='GET' class='form-group'>
                    <h2> ". $dado -> nome . "<h2>    
                    <input type='hidden' name='id_sondagem' value='".$dado -> id_sondagem . "'>
                    <input type='hidden' name='acao' value='2'>
                    <input class='btn btn-success btn-lg' type='submit' value='Visualizar Ocorrencias'>                                    
                </form>";
            }
            ?>            
        </form>
    </div>
</body>
<script type="text/javascript" src="../javascript/index.js"></script>
<script type="text/javascript" src="../javascript/controller.ajax"></script>

</html>