<?php
require_once "../dao/NomeSondagemDAO.php";
require_once "../model/NomeSondagem.php";
class NomeSondagemControl{
    private $dao;
    private $modelo;
    private $acao;
    function __construct(){
        $this->dao=new NomeSondagemDAO();
        $this->modelo=new NomeSondagem();
        $this->acao=$_REQUEST["acao"];
        $this->verificaAcao();
    }
    function verificaAcao(){
        switch ($this->acao){
            case 1:
                $this->modelo->setNome($_POST["nome"]);
                $this->modelo->setCoordx($_POST["coordx"]);
                $this->modelo->setCoordy($_POST["coordy"]);
                $this->modelo->setCota($_POST["cota"]);
                $this->modelo->setProfundidade($_POST["profundidade"]);
                $this->modelo->setInclinacao($_POST["inclinacao"]);
                $this->modelo->setGeoreferenciamento($_POST["georeferenciamento"]);
                $this->dao->inserir($this->modelo);
                header("Location:../view/CadTipoRochaSondagem.php");
                break;
        }
    }

}
new NomeSondagemControl();