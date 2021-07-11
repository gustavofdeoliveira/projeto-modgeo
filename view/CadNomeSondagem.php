<?php
include_once("../control/conexao.php");
require_once("../dao/EmpresaDAO.php");
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
                    <a href="#" class="logo-nav"><img src="../img/icon/1Icon-azul-navbar.png" alt="Logo Modgeo"></a>
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

            <div class="form-group">
                <label class="form-label" for="nome">Nome da Sondagem:</label>
                <input class="form-control" type="text" name="nome">
            </div>
            <div class="form-group">
                <label for="responsavel"> Executado Por: </label>
                <?php 
                    $dao = new EmpresaDAO();
                    $dados = $dao -> listarEmpresas();
            
                ?>
                <select class="form-control" name="responsavel">
                    <option>Selecione</option>
                    <?php 
                    foreach ($dados as $dado){
                        echo "<option value='".$dado->id_empresa."'>".$dado->nome."</option>";
                    } 
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="inicio" class="col-2 col-form-label">Data Início:</label>
                <div class="col-10">
                    <input class="form-control" type="date" value="AAAA/MM/DD" name="inicio">
                </div>
            </div>
            <div class="form-group">
                <label for="termino" class="col-2 col-form-label">Data Termino:</label>
                <div class="col-10">
                    <input class="form-control" type="date" value="AAAA/MM/DD" name="termino">
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="coordx">Coordenada X:</label>
                <input class="form-control" type="text" name="coordx">
            </div>
            <div class="form-group">
                <label class="form-label" for="coordy">Coordenada Y:</label>
                <input class="form-control" type="text" name="coordy">
            </div>
            <div class="form-group">
                <label class="form-label" for="cota">Cota:</label>
                <input class="form-control" type="text" name="cota">
            </div>
            <div class="form-group">
                <label class="form-label" for="direcao">Direção:</label>
                <input class="form-control" type="text" name="direcao">
            </div>
            <div class="form-group">
                <label class="form-label" for="profundidade">Profundidade:</label>
                <input class="form-control" type="text" name="profundidade">
            </div>
            <div class="form-group">
                <label class="form-label" for="inclinacao">Inclinação</label>
                <input class="form-control" type="text" name="inclinacao">
            </div>
            <div class="form-group">
                <label class="form-label" for="georeferenciamento">Georeferenciamento:</label>
                <input class="form-control" type="text" name="georeferenciamento">
            </div>
            <div class="form-group">
                <label for="comentario">Comentário:</label>
                <textarea class="form-control" rows="3" name="comentario"></textarea>
            </div>
            <input type="hidden" name="acao" value="1">
            <input class="btn btn-success btn-lg" type="submit" value="Gravar">

        </form>
    </div>
</body>
<script type="text/javascript" src="../javascript/index.js"></script>

</html>