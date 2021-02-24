<?php
session_start();
require_once ("../control/Conexao.php");

class NomeSondagemDAO{
    private $conn;
   function __construct()
   {
        $this->conn=Conexao::conectar();
   }
   function inserir(NomeSondagem $modelo){
       $sql="insert into nome_sondagem(nome,coord_x,coord_y,profundidade,cota,inclinacao,georeferenciamento) 
                          values('".$modelo->getNome()."','".$modelo->getCoordx()."','".$modelo->getCoordy()."','".
                                $modelo->getProfundidade()."','".$modelo->getCota()."','".$modelo->getInclinacao()."','".$modelo->getGeoreferenciamento()."')";
      $this->conn->exec($sql);
      $_SESSION["id"]=$this->conn->lastInsertId();

       /*$stmt = $this->conn->prepare($sql);

       $stmt->execute(array(
           ':nome' => $modelo->getNome(),
           ':coord_x'=>$modelo->getCoordx(),
           ':coord_x'=>$modelo->getCoordy(),
           ':profundidade'=>$modelo->getProfundidade(),
           ':cota'=>$modelo->getCota())
       );*/

   }
}