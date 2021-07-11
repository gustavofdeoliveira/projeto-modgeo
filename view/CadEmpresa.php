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
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- fonte do site-->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/nav.css">
    <title>Cadastro de Empresas</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <!-- <img src="img/icon/icon-azul-navbar.png"> -->
                <img src="../img/icon/icon-azul-navbar.png" alt="">
            </div>
            <ul class="nav-links">
                <li><a href="index.html">INÍCIO</a></li>
                <li><a href="index.html">SOBRE</a></li>
                <li><a href="index.html">GUIA</a></li>
                <li><a href="index.html">COMEÇAR</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <main>
        <div class="well container">
            <form action="../control/EmpresaControl.php" method="POST" class="form-group">

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
                    <input class="form-control" type="text" name="telefone" onkeypress="$(this).mask('00.000-000')">
                </div>
                <input type="hidden" name="acao" value="1">
                <input class="btn btn-success btn-lg" type="submit" value="Gravar">

            </form>
        </div>
    </main>
</body>
<script type="text/javascript" src="../javascript/index.js"></script>
<script type="text/javascript" src="../javascript/nav.js"></script>

</html>