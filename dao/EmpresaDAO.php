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
        $sql = "SELECT * FROM empresa WHERE nrCnpj = '" . $modelo->getNrCnpj() . "'";
        $query = $this->conn->query($sql);
        $temRegistro = $query->fetchAll(PDO::FETCH_OBJ);

        if ($temRegistro == null and $temRegistro == "") {
            $sql = "INSERT INTO empresa(nmEmpresa,nrCnpj,nmCidadeOrigem,nmEmail, nrTelefone,dtInclusao) 
            VALUES(
                '" . $modelo->getNmEmpresa() . "',
                '" . $modelo->getNrCnpj() . "',
                '" . $modelo->getNmCidadeOrigem() . "',
                '" . $modelo->getNmEmail() . "',
                '" . $modelo->getNrTelefone() . "', 
                CURRENT_TIMESTAMP())";
            $sql = mb_strtoupper($sql);
            $this->conn->exec($sql);
        }else{
            $msg = "Já possui uma empresa Cadastra com este CNPJ";
            return $_POST[$msg];
        }
    }
    function listarEmpresas()
    {
        $sql = "SELECT * FROM empresa";
        $query = $this->conn->query($sql);
        $dados = $query->fetchAll(PDO::FETCH_OBJ);
        return $dados;
    }
}
