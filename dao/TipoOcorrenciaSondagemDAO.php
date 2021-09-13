<?php
require_once("../control/Conexao.php");
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

class TipoOcorrenciaSondagemDAO
{
    private $conn;
    function __construct()
    {
        $this->conn = Conexao::conectar();
    }
    function inserir(TipoOcorrenciaSondagem $modelo)
    {        
        $sql = "INSERT INTO tipo_ocorrencia_sondagem(nrProfundidadeMin, nrProfundidadeMax, nmTipoRocha, id_sondagem,nmCor)
        VALUES(
            '" . $modelo->getNrProfundidadeMin() . "',
            '" . $modelo->getNrProfundidadeMax() . "',
            '" . $modelo->getNmTipoRocha() . "',
            '" . $modelo->getIdNomeSondagem() . "',
            '" . $modelo->getNmCor() . "'
        )";
        $this->conn->exec($sql);
    }

    function listarOcorrenciasSondagem($id_sondagem){        
        $sql = "SELECT * FROM tipo_ocorrencia_sondagem";
        $query = $this->conn->query($sql);
        $dados = $query->fetchAll(PDO::FETCH_OBJ);
        return $dados;
    }
}
