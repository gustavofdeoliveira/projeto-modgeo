<?php
require_once "../dao/TipoOcorrenciaSondagemDAO.php";
require_once "../model/TipoOcorrenciaSondagem.php";
class TipoOcorrenciaSondagemControl{
    private $dao;
    private $modelo;
    private $acao;
    function __construct(){
        $this->dao=new TipoOcorrenciaSondagemDAO();
        $this->modelo=new TipoOcorrenciaSondagem();
        $this->acao=$_REQUEST["acao"];
        $this->verificaAcao();
    }
    function verificaAcao(){
        switch ($this->acao){
            case 1:
                $this->modelo->setProfMin($_POST["profMin"]);
                $this->modelo->setProfMax($_POST["profMax"]);
                $this->modelo->setTipoRocha($_POST["tipoRocha"]);
                $this->modelo->setIdNomeSondagem($_SESSION["id"]);
                $this->modelo->setHachuras($_POST["hachuras"]);
                $this->modelo->setCor($_POST["cor"]);
                $this->dao->inserir($this->modelo);
                header("Location:../view/CadParametrosSondagem.php");
                break;
        }
    }

}
new TipoOcorrenciaSondagemControl();