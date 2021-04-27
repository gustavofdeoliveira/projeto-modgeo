<?php
session_start();
require_once("../control/Conexao.php");

class ParametrosSondagemDAO
{
    private $conn;
    function __construct()
    {
        $this->conn = Conexao::conectar();
    }
    function inserir(ParametrosSondagem $modelo)
    {
        $sql = "insert into parametros_sondagem(alteracao,consistencia,fraturamento,rqd,id_sondagem)values('" . $modelo->getAlteracao() . "','" . $modelo->getConsistencia() . "','" . $modelo->getFraturamento() . "','" .$modelo->getRqd() . "','" .$modelo->getIdSondagem() . "')";

        $this->conn->exec($sql);
        $_SESSION["id"] = $this->conn->lastInsertId();
    }
}
