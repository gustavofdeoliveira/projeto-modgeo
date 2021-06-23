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
    <title>Modgeo | Cadastro de Empresas</title>
    <!-- Favicon do site-->
    <link rel="shortcut icon" href="../img/icon/logo-modgeo-favicon.ico" type="image/x-icon">
    <!-- Css style e JS do site-->

    <link rel="stylesheet" href="../css/forms-style.css">
    <link rel="stylesheet" href="../css/theme-responsive.css">
    <!-- Fonte do site-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'>
    <!-- BoorStrap do site-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>


<body>

    <main class="container">
        <div class="row formulario-posicao">
            <div class="col-lg-10 offset-lg-1">
                <form action="../control/CadastroEmpresaControl.php" method="POST" class="form-group">
                <h2>Cadastro de Empresa</h2>   
                <div class="row">
                        <div class="col-lg-10 offset-1 barra-progresso">
                            <progress value="0" max="100" style="--value: 0; --max: 100;"></progress>
                        </div>
                    </div>
                    <div class="formulario">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-field">
                                    <input type="text" name="nome" id="nome" placeholder="Nome da Empresa">
                                    <div class="underline"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-field">
                                    <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ">
                                    <div class="underline"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-field">
                                    <input type="text" name="cidadeOrigem" id="cidadeOrigem" placeholder="Cidade de origem">
                                    <div class="underline"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-field">
                                    <input type="text" name="email" id="email" placeholder="E-mail de contato">
                                    <div class="underline"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-field">
                                    <input type="text" name="telefone" id="telefone" placeholder="Telefone para contato">
                                    <div class="underline"></div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="acao" value="1">
                        <input class="btn btn-success btn-lg" type="submit" value="Salvar">
                    </div>
                </form>

            </div>
        </div>
    </main>
</body>