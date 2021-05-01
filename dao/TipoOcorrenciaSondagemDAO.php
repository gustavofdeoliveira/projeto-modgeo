<?php
session_start();
require_once("../control/Conexao.php");

class TipoOcorrenciaSondagemDAO
{
    private $conn;
    function __construct()
    {
        $this->conn = Conexao::conectar();
    }
    function inserir(TipoOcorrenciaSondagem $modelo)
    {
        $sql = "INSERT INTO tipo_ocorrencia_sondagem(profundidade_min, profundidade_max, tipo_rocha,id_sondagem,hachuras,cor)VALUES('".$modelo->getProfMin()."','".$modelo->getProfMax()."','".$modelo->getTipoRocha()."', '".$modelo -> getHachuras()."', '".$modelo -> getCor()."')";
        $this->conn->exec($sql);
      $_SESSION["id"]=$this->conn->lastInsertId();
    }
}
