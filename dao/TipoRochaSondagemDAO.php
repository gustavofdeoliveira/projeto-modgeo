<?php
session_start();
require_once ("../control/Conexao.php");

class TipoRochaSondagemDAO{
    private $conn;
   function __construct()
   {
        $this->conn=Conexao::conectar();
   }
   function inserir(TipoRochaSondagem $modelo){
       $sql = "insert into tipo_rocha_sondagem(profundidade_min, profundidade_max, tipo rocha, id_nome_sondagem)values('".$modelo->getProfMin()."','".$modelo->getProfMax()."','".$modelo->getTipoRocha()."','".
       $modelo->getIdNomeSondagem()."')";

       
       $this->conn->exec($sql);
      $_SESSION["id"]=$this->conn->lastInsertId();

   }
}