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
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/forms-style.css">
    <title>Cadastro de Sondagens</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <!-- <img src="img/icon/icon-azul-navbar.png"> -->
                <img src="../image/icon/icon-azul-navbar.png" alt="">
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
        <div class="well container col-lg-6 col-lg-offset-3">
            <form action="../control/NomeSondagemControl.php" method="POST" class="form-group">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-forms">Cadastrar Sondagem</h2>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="nmSondagem">Nome da Sondagem:</label>
                                    <input required class="form-control" type="text" name="nmSondagem" placeholder="Digite o nome da sondagem">
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="nmResponsavel"> Executado Por: </label>
                                    <?php
                                    $dao = new EmpresaDAO();
                                    $dados = $dao->listarEmpresas();
                                    ?>
                                    <select required id="nmResponsavel" type="text" class="form-control" name="nmResponsavel">
                                        <option>Selecione</option>
                                        <?php
                                        foreach ($dados as $dado) {
                                            echo "<option value='" . $dado->nmEmpresa . "'>" . $dado->nmEmpresa . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="dtInicio" class="col-2 col-form-label">Início:</label>
                                    <div class="col-10">
                                        <input required class="form-control" type="date" value="AAAA/MM/DD" name="dtInicio">
                                        <span class="error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="dtTermino" class="col-2 col-form-label">Termino:</label>
                                    <div class="col-6">
                                        <input required class="form-control" type="date" value="AAAA/MM/DD" name="dtTermino">
                                        <span class="error"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="nrCoordx">Coordenada X:</label>
                                    <input required class="form-control" type="text" name="nrCoordx" placeholder="Digite a coordenada X">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="nrCoordy">Coordenada Y:</label>
                                    <input required class="form-control" type="text" name="nrCoordy" placeholder="Digite a coordenada Y">
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="nrCota">Cota:</label>
                                    <input required class="form-control" type="text" name="nrCota" placeholder="Digite a cota">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="nrDirecao">Direção:</label>
                                    <input required class="form-control" type="text" name="nrDirecao" placeholder="Digite a direção">
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="nrProfundidade">Profundidade:</label>
                                    <input required class="form-control" type="text" name="nrProfundidade" placeholder="Digite a profundidade">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="nrInclinacao">Inclinação:</label>
                                    <input required class="form-control" type="text" name="nrInclinacao" placeholder="Digite a inclinação">
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="nrGeoreferenciamento">Georeferenciamento:</label>
                                    <input required class="form-control" type="text" name="nrGeoreferenciamento" placeholder="Digite o georeferenciamento">
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtComentario">Comentário:</label>
                            <textarea class="form-control" rows="3" name="txtComentario"></textarea>
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
<script type="text/javascript" src="../javascript/script.js"></script>


</html>