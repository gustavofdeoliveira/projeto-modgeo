<?php
session_start();
print "Id da sondagem: " . $_SESSION["id"];
?>
<form action="../control/TipoRochaSondagemControl.php" method="POST">
  <label for="profMin"> Prof.Mínima </label>
  <input type="text" name="profMin"><br>
  <label for="profMax"> Prof.Máxima </label>
  <input type="text" name="profMax"><br>
  <label for="tipoRocha"> Tipo de Rocha </label>
  <select name="tipoRocha">
    <option name="Basalto">Basalto</option>
    <option name="Arenito">Arenito</option>
  </select><br>
  <input type="hidden" name="acao" value="1">
  <input type="submit" value="Salvar">
</form>