<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="img/icon/logo-modgeo-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css'>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- fonte do site-->
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/forms-style.css">
  <title>Cadastro Tipo Ocorrência Sondagem</title>
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
        <li><a href="../view/CadEmpresa.php">EMPRESA</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container well col-lg-6 col-lg-offset-3">
      <form action="../control/TipoOcorrenciaSondagemControl.php" method="POST" class="form-group">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="title-forms">Cadastrar Tipo Ocorrência Sondagem</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
          <input type="hidden" name="acao" value="1">
            <input class="input-adicionar" type="submit" name="mais" value="+">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="nrProfundidadeMin"> Prof.Mínima: </label>
                  <input required class="form-control" type="text" name="nrProfundidadeMin" onkeypress="return isNumber(event)">
                  <span class="error"></span>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="nrProfundidadeMax"> Prof.Máxima: </label>
                  <input required class="form-control" type="text" name="nrProfundidadeMax" onkeypress="return isNumber(event)">
                  <span class="error"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="nrTipoRocha"> Tipo de Rocha:</label>
                  <select class="form-control" id="tipoRocha" name="nmTipoRocha">
                    <option>Selecionar</option>
                  </select>
                  <span class="error"></span>
                </div>
              </div>
              <div class="col-lg-6">
              <div class="form-group">
                  <label for="nrCor"> Cor:</label>
                  <input required class="form-control" type="color" name="nmCor">
                  <span class="error"></span>
                </div>           
              </div>
            </div>
            <input type="hidden" name="acao" value="1">
            <input class="btn btn-success btn-lg" type="submit" value="Próximo">
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