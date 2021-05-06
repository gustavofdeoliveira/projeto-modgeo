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
        $sql = "insert into empresa(nome,cnpj,cidade_origem,email,telefone) values('" . $modelo->getNome() . "','" . $modelo->getCnpj() . "','" . $modelo->getCidadeOrigem() . "','" . $modelo->getEmail() . "','" . $modelo->getTelefone() . "')";
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
