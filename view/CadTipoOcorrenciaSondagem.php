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
    <div class="container well col-lg-6 col-lg-offset-3">
      <form action="../control/TipoOcorrenciaSondagemControl.php" method="POST" class="form-group">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="title-forms">Cadastrar Tipo Ocorrência Sondagem</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="profMin"> Prof.Mínima </label>
                  <input class="form-control" type="text" name="profMin">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="profMax"> Prof.Máxima </label>
                  <input class="form-control" type="text" name="profMax">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="tipoRocha"> Tipo de Rocha </label>
                  <select class="form-control" id="tipoRocha" name="tipoRocha">
                    <option name="">Selecionar</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="hachuras"> Hachuras:</label>
                  <input class="form-control" type="text"  name="hachuras">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="cor"> Cor:</label>
                  <input class="form-control" type="color" name="cor">
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