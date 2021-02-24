<?php
  session_start();
  echo "Id da sondagem".$_SESSION["id"];
?>
<form action="../control/TipoRochaSondagemControl.php" method="POST">
Prof.Mínima
    <input type="text" name="profMin"><br>
    Prof.Máxima
    <input type="text" name="profMax"><br>
    Tipo de Rocha
    <select name="tipoRocha">
        <option>Basalto</option>
        <option>Arenito</option>
    </select><br>
    <input type="submit" value="Salvar">
</form>

