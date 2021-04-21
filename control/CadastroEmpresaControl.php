<?php
require_once "../dao/CadastroEmpresaDAO.php";
require_once "../model/CadastroEmpresa.php";
class CadastroEmpresaControl{
    private $dao;
    private $modelo;
    private $acao;
    function __construct(){
        $this->dao=new CadastroEmpresaDAO();
        $this->modelo=new CadastroEmpresa();
        $this->acao=$_REQUEST["acao"];
        $this->verificaAcao();
    }
    function verificaAcao(){
        switch ($this->acao){
            case 1:
                $this->modelo->setNome($_POST["nome"]);
                $this->modelo->setCnpj($_POST["cnpj"]);
                $this->modelo->setCidadeOrigem($_POST["cidadeOrigem"]);
                $this->modelo->setEmail($_POST["email"]);
                $this->modelo->setTelefone($_POST["telefone"]);
                $this->dao->inserir($this->modelo);
                break;
        }
    }

}
new CadastroEmpresaControl();