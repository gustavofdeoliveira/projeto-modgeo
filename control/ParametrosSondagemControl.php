<?php
require_once "../dao/ParametrosSondagemDAO.php";
require_once "../model/ParametrosSondagem.php";
class ParametrosSondagemControl{
    private $dao;
    private $modelo;
    private $acao;
    function __construct(){
        $this->dao=new ParametrosSondagemDAO();
        $this->modelo=new ParametrosSondagem();
        $this->acao=$_REQUEST["acao"];
        $this->verificaAcao();
    }
    function verificaAcao(){
        switch ($this->acao){
            case 1:
                $this->modelo->setNrAlteracao($_POST["nrAlteracao"]);
                $this->modelo->setNrConsistencia($_POST["nrConsistencia"]);
                $this->modelo->setNrFraturamento($_POST["nrFraturamento"]);
                $this->modelo->setNrRqd($_POST["nrRqd"]);
                $this->modelo->setIdNomeSondagem($_SESSION["id"]);
                $this->dao->inserir($this->modelo);
                header("Location:../view/CadParametrosSondagem.php");               
                break;
        }
    }

}
new ParametrosSondagemControl();