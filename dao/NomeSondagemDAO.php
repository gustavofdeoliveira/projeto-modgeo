<?php
session_start();
require_once("../control/Conexao.php");

class NomeSondagemDAO
{
    private $conn;
    function __construct()
    {
        $this->conn = Conexao::conectar();
    }
    function inserir(NomeSondagem $modelo)
    {
        $sql = "INSERT INTO nome_sondagem(nmSondagem,nmResponsavel,dtInicio,dtTermino,nrCoord_x,nrCoord_y,nrCota,nrDirecao,nrProfundidade,nrInclinacao,nrGeoreferenciamento,txtComentario,dtInclusao) 
        VALUES(
            '" . $modelo->getNmSondagem() . "',
            '" . $modelo->getNmResponsavel() . "',
            '" . $modelo->getDtInicio() . "',
            '" . $modelo->getDtTermino() . "',
            '" . $modelo->getNrCoordx() . "',
            '" . $modelo->getNrCoordy() . "',
            '" . $modelo->getNrCota() . "',
            '" . $modelo->getNrDirecao() . "',
            '" . $modelo->getNrProfundidade() . "',
            '" . $modelo->getNrInclinacao() . "',
            '" . $modelo->getNrGeoreferenciamento() . "',
            '" . $modelo->getTxtComentario() . "',
             CURRENT_TIMESTAMP()
        )";   
        $sql = mb_strtoupper($sql);     
        $this->conn->exec($sql);
        $_SESSION["id"] = $this->conn->lastInsertId();
    }
    function listarSondagens()
    {
        $sql = "SELECT * FROM nome_sondagem";
        $query = $this->conn->query($sql);
        $dados = $query->fetchAll(PDO::FETCH_OBJ);
        return $dados;
    }
}