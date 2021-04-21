<?php
session_start();
require_once("../control/Conexao.php");

class CadastroEmpresaDAO
{
    private $conn;
    function __construct()
    {
        $this->conn = Conexao::conectar();
    }
    function inserir(CadastroEmpresa $modelo)
    {
        $sql = "insert into empresa(nome,cnpj,cidade_origem,email,telefone) values('" . $modelo->getNome() . "','" . $modelo->getCnpj() . "','" . $modelo->getCidadeOrigem() . "','" . $modelo->getEmail() . "','" . $modelo->getTelefone() . "')";
        $this->conn->exec($sql);
        $_SESSION["id"] = $this->conn->lastInsertId();

        /*$stmt = $this->conn->prepare($sql);

       $stmt->execute(array(
           ':nome' => $modelo->getNome(),
           ':coord_x'=>$modelo->getCoordx(),
           ':coord_x'=>$modelo->getCoordy(),
           ':profundidade'=>$modelo->getProfundidade(),
           ':cota'=>$modelo->getCota())
       );*/
    }
}
