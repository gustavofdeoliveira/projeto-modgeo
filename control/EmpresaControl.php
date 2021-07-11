<?php
require_once "../dao/EmpresaDAO.php";
require_once "../model/Empresa.php";
class EmpresaControl{
    private $dao;
    private $modelo;
    private $acao;
    function __construct(){
        $this->dao=new EmpresaDAO();
        $this->modelo=new Empresa();
        $this->acao=$_REQUEST["acao"];
        $this->verificaAcao();
    }
    function verificaAcao(){
        switch ($this->acao){
            case 1:
                $this->modelo->setNmEmpresa($_POST["nmEmpresa"]);
                $this->modelo->setNrCnpj($_POST["nrCnpj"]);
                $this->modelo->setNmCidadeOrigem($_POST["nmCidadeOrigem"]);
                $this->modelo->setNmEmail($_POST["nmEmail"]);
                $this->modelo->setNrTelefone($_POST["nrTelefone"]);
                $this->dao->inserir($this->modelo);
                break;
        }
    }

}
new EmpresaControl();