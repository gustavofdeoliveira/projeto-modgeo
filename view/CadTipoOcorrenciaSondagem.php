<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/icon/logo-modgeo-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'><!-- fonte do site-->
  <link rel="stylesheet" href="../css/index.css">
  <title>Cadastro de Rochas</title>
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
  <div class="container well">

    <form action="../control/TipoOcorrenciaSondagemControl.php" method="POST" class="form-group">

      <div class="form-group">
        <label for="profMin"> Prof.Mínima </label>
        <input class="form-control" type="text" name="profMin">
      </div>
      <div class="form-group">
        <label for="profMax"> Prof.Máxima </label>
        <input class="form-control" type="text" name="profMax">
      </div>
      <div class="form-group">
        <label for="tipoRocha"> Tipo de Rocha </label>
        <select class="form-control" name="tipoRocha">
          <option name="Agua">Água</option>
          <option name="Andesito">Andesito</option>
          <option name="Arenito">Arenito</option>
          <option name="Arenito Argiloso">Arenito Argiloso</option>
          <option name="Arenito com Niveis Calcarios">Arenito com Níveis Calcários</option>
          <option name="Argila/Argiloso">Argila/Argiloso</option>
          <option name="Argilito">Argilito</option>
          <option name="Basalto">Basalto</option>
          <option name="Basalto Vesiculo-Amigdaloidal">Basalto Vesículo-Amigdaloidal</option>
          <option name="Brecha">Brecha</option>
          <option name="Calcario">Calcário</option>
          <option name="Calcario Estratificado">Calcário Estratificado</option>
          <option name="Calcario Oolitico">Calcário Oolitico</option>
          <option name="Calcarenito">Calcarenito</option>
          <option name="Conglomerado">Conglomerado</option>
          <option name="Diabasio">Diabásico</option>
          <option name="Dolomito">Dolomito</option>
          <option name="Diamictito">Diamictito</option>
          <option name="Filito">Filito</option>
          <option name="Folhelho">Folhelho</option>
          <option name="Folhelho Carbonoso">Folhelho Carbonoso</option>
          <option name="Folhelho com niveis calcarios">Folhelho com Níveis Calcários</option>
          <option name="Gabro/Piroxenito">Gabro/Piroxenito</option>
          <option name="Gnaisse">Gnaisse</option>
          <option name="Granito">Granito</option>
          <option name="Marmore Calcitico">Mármore Calcítico</option>
          <option name="Marmore Dolomitico">Mármore Dolomítico</option>
          <option name="Metassiltito">Metassiltito</option>
          <option name="Metarritmito">Metarritmito</option>
          <option name="Migmatito">Migmatito</option>
          <option name="Quartzito">Quartzito</option>
          <option name="Riolito">Riolito</option>
          <option name="Sienito">Sienito</option>
          <option name="Siltito">Siltito</option>
          <option name="Tilito">Tilito</option>
          <option name="Xisto">Xisto</option>
        </select>
      </div>
      <div class="form-group">
        <label for="hachuras"> Hachuras:</label>
        <input class="form-control" type="text" name="hachuras">
      </div>
      <div class="form-group">
        <label for="cor"> Cor:</label>
        <input class="form-control" type="color" name="cor">
      </div>
      <input type="hidden" name="acao" value="1">
      <input class="btn btn-success btn-lg" type="submit" value="Salvar">

    </form>
  </div>
</body>

</html>