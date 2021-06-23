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
        $sql = "INSERT INTO nome_sondagem(nome,responsavel,inicio,termino,coord_x,coord_y,cota,direcao,profundidade,inclinacao,georeferenciamento,comentario) 
        VALUES(
            '" . $modelo->getNome() . "',
            '" . $modelo->getResponsavel() . "',
            '" . $modelo->getInicio() . "',
            '" . $modelo->getTermino() . "',
            '" . $modelo->getCoordx() . "',
            '" . $modelo->getCoordy() . "',
            '" . $modelo->getCota() . "',
            '" . $modelo->getDirecao() . "',
            '" . $modelo->getProfundidade() . "',
            '" . $modelo->getInclinacao() . "',
            '" . $modelo->getGeoreferenciamento() . "',
            '" . $modelo->getComentario() . "'
        )";        
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