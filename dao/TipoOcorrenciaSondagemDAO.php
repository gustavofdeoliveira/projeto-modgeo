<?php
session_start();
require_once ("../control/Conexao.php");

class TipoOcorrenciaSondagemDAO{
    private $conn;
   function __construct()
   {
        $this->conn=Conexao::conectar();
   }
   function inserir(TipoOcorrenciaSondagem $modelo){
       $sql = "insert into tipo_ocorrencia_sondagem(profundidade_min, profundidade_max, tipo_rocha, id_sondagem, cor, hachuras)values('".$modelo->getProfMin()."','".$modelo->getProfMax()."','".$modelo->getTipoRocha()."','".$modelo->getIdNomeSondagem()."', '".$modelo -> getCor()."', '".$modelo -> getHachuras()."')";
        $this->conn->exec($sql);
      $_SESSION["id"]=$this->conn->lastInsertId();

   }
}