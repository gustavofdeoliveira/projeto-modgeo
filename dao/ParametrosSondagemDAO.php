<?php
require_once("../control/Conexao.php");
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

class ParametrosSondagemDAO
{
    private $conn;
    function __construct()
    {
        $this->conn = Conexao::conectar();
    }
    function inserir(ParametrosSondagem $modelo)
    {
        $sql = "INSERT INTO parametros_sondagem(nrAlteracao,nrConsistencia,nrFraturamento,nrRqd,id_sondagem)
        VALUES (
            '" . $modelo->getNrAlteracao() . "',
            '" . $modelo->getNrConsistencia() . "',
            '" . $modelo->getNrFraturamento() . "',
            '" . $modelo->getNrRqd() . "',
            '" . $modelo->getIdNomeSondagem() . "'
        )";  
            $this->conn->exec($sql);
    }

    function listarParametrosSondagem($id_sondagem){        
        $sql = "SELECT * FROM parametros_sondagem";
        $query = $this->conn->query($sql);
        $dados = $query->fetchAll(PDO::FETCH_OBJ);
        return $dados;
    }
}
