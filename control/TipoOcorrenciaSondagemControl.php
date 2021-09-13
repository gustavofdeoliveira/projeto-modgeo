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
                $this->modelo->setNrProfundidadeMin($_POST["nrProfundidadeMin"]);
                $this->modelo->setNrProfundidadeMax($_POST["nrProfundidadeMax"]);
                $this->modelo->setNmTipoRocha($_POST["nmTipoRocha"]);
                $this->modelo->setIdNomeSondagem($_SESSION["id"]);
                $this->modelo->setNmCor($_POST["nmCor"]);
                $this->dao->inserir($this->modelo);
                $mais = $_POST['mais'];
                echo $mais;
                 if($mais == "+"){
                     header("Location:../view/CadTipoOcorrenciaSondagem.php");
                 }else{
                     header("Location:../view/CadParametrosSondagem.php");
                 }
                break;
        }
    }
}
new TipoOcorrenciaSondagemControl();