<?php
session_start();
include_once("../control/conexao.php");
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
    <title>Cadastro de Sondagens</title>
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
        <form action="../control/ParametrosSondagemControl.php" method="POST" class="form-group">

            <div class="form-group">
                <label class="form-label" for="alteracao">Alteração:</label>
                <input class="form-control" type="text" name="alteracao">
            </div>
            <div class="form-group">
                <label class="form-label" for="consistencia">Consistecia:</label>
                <input class="form-control" type="text" name="consistencia">
            </div>
            <div class="form-group">
                <label class="form-label" for="fraturamento">Fraturamento:</label>
                <input class="form-control" type="text" name="fraturamento">
            </div>
            <div class="form-group">
                <label class="form-label" for="rqd">RQD:</label>
                <input class="form-control" type="text" name="rqd">
            </div>
            <input type="hidden" name="acao" value="1">
            <input class="btn btn-success btn-lg" type="submit" value="Gravar">

        </form>
    </div>
</body>
<script type="text/javascript" src="../javascript/index.js"></script>

</html>