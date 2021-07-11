<?php
session_start();
require_once("../control/Conexao.php");

class EmpresaDAO
{
    private $conn;
    function __construct()
    {
        $this->conn = Conexao::conectar();
    }
    function inserir(Empresa $modelo)
    {
        
        $sql = "insert into empresa(nmEmpresa,nrCnpj,nmCidadeOrigem,nmEmail, nrTelefone,dtInclusao) values('" . $modelo->getNmEmpresa() . "','" . $modelo->getNrCnpj() . "','" . $modelo->getNmCidadeOrigem() . "','" . $modelo->getNmEmail() . "','" . $modelo->getNrTelefone() . "', CURRENT_TIMESTAMP())";
         $sql = mb_strtoupper($sql);
        $this->conn->exec($sql);
    }
    function listarEmpresas()
    {
        $sql = "SELECT * FROM empresa";
        $query = $this->conn->query($sql);
        $dados = $query->fetchAll(PDO::FETCH_OBJ);
        return $dados;
    }
}
