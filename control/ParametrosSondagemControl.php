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
                    $this->modelo->setAlteracao($_POST["alteracao"]);
                    $this->modelo->setConsistencia($_POST["consistencia"]);
                    $this->modelo->setFraturamento($_POST["fraturamento"]);
                    $this->modelo->setRqd($_POST["rqd"]);
                    $this->modelo->setIdsondagem($_POST["id"]);
                    $this->dao->inserir($this->modelo);
                    break;
            }
    }
}