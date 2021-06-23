<?php
session_start();
include_once("../control/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>ModGeo 3.0 | Início</title>
    <!-- Favicon do site-->
    <link rel="shortcut icon" href="../img/icon/logo-modgeo-favicon.ico" type="image/x-icon">
    <!-- Css style e JS do site-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/theme-responsive.css">
    <!-- Fonte do site-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'>
    <!-- BoorStrap do site-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>


<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
              <img src="../img/icon/logo-modgeo-index-navbar.png" alt="Logo Modgeo 3.0">
            </a>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <a class="navbar-brand" href="#">
                  <img class="logonavbar" src="../img/icon/logo-modgeo-index-navbar.png"
                        alt="Logo Modgeo 3.0">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação" style="font-size: 30px !important;">
                    <span class="navbar-toggler-icon">
                      
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Início</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Sobre o ModGeo</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Como usar o ModGeo</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link btn-projeto" href="./view/CadNomeSondagem.php">Gerar Projeto</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link btn-projeto" href="./view/ListSondagens.php">Gerar Relatório</a>
                        </li>
                    </ul>
                </div>
            </nav>
    </header>
    <div class="well container">
        <form action="../control/CadastroEmpresaControl.php" method="POST" class="form-group" >

            <div class="form-group">
                <label class="form-label" for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome">
            </div>
            <div class="form-group">
                <label class="form-label" for="cnpj">CNPJ:</label>
                <input class="form-control" type="text" name="cnpj" onkeypress="$(this).mask('00.000.000/0000-00')">
            </div>
            <div class="form-group">
                <label class="form-label" for="cidadeOrigem">Cidade Origem:</label>
                <input class="form-control" type="text" name="cidadeOrigem">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label class="form-label" for="telefone">Telefone:</label>
                <input class="form-control" type="text" name="telefone"  onkeypress="$(this).mask('00.000-000')">
            </div>
            <input type="hidden" name="acao" value="1">
            <input class="btn btn-success btn-lg" type="submit" value="Gravar">

        </form>        
    </div>
</body>
<script type="text/javascript" src="../javascript/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>