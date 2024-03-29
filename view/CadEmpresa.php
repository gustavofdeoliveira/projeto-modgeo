<?php
session_start();
include_once("../control/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/icon/logo-modgeo-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- fonte do site-->
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/forms-style.css">
    <title>Cadastro de Empresas</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <!-- <img src="img/icon/icon-azul-navbar.png"> -->
                <img src="../image/icon/icon-azul-navbar.png" alt="">
            </div>
            <ul class="nav-links">
                <li><a href="/index.html">INÍCIO</a></li>
                <li><a href="#">SOBRE</a></li>
                <li><a href="#">GUIA</a></li>
                <li><a href="../view/CadNomeSondagem.php">COMEÇAR</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <main>
        <div class="well container col-lg-6 col-lg-offset-3">
            <form action="../control/EmpresaControl.php" method="POST" class="form-group">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-forms">Cadastrar Empresa</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="nmEmpresa">Nome:</label>
                                    <input required class="form-control" type="text" name="nmEmpresa" placeholder="Digite o nome da empresa">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label" for="nrCnpj">CNPJ:</label>
                                    <input required class="form-control" type="text" name="nrCnpj" id="nrCnpj" placeholder="00.000.000/0000-00">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label" for="nmEstadoOrigem">Estado Origem:</label>
                                    <select class="form-control" type="text" id="Estado" name="nmEstadoOrigem"></select>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label" for="nmCidadeOrigem">Cidade Origem:</label>
                                    <select  class="form-control" type="text" id="Cidade" name="nmCidadeOrigem"></select>
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="nmEmail">Email</label>
                                    <input required class="form-control" type="email" name="nmEmail" placeholder="Digite o email da empresa">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="nrTelefone">Telefone:</label>
                                    <input required class="form-control" type="text" name="nrTelefone" id="nrTelefone" placeholder="(00) 0000-0000">
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="acao" value="1">
                        <input class="btn btn-success btn-lg" type="submit" value="Salvar">
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

<script type="text/javascript" src="../javascript/plugins/plugin-mask.js"></script>
<script type="text/javascript" src="../javascript/plugins/jquery.js"></script>
<script type="text/javascript" src="../javascript/script.js"></script>

</html>