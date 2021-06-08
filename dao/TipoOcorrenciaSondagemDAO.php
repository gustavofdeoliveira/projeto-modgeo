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
        $sql = "insert into tipo_ocorrencia_sondagem(profundidade_min, profundidade_max, tipo_rocha, id_sondagem,hachuras,cor)values('" . $modelo->getProfMin() . "','" . $modelo->getProfMax() . "','" . $modelo->getTipoRocha() . "','" .$modelo->getIdNomeSondagem() . "','" .        $modelo->getHachuras() . "','" .
            $modelo->getCor() . "')";
        $this->conn->exec($sql);
    }

    function listarOcorrenciasSondagem($id_sondagem){        
        $sql = "SELECT * FROM tipo_ocorrencia_sondagem";
        $query = $this->conn->query($sql);
        $dados = $query->fetchAll(PDO::FETCH_OBJ);
        return $dados;
    }
}
