<?php
require_once "../dao/NomeSondagemDAO.php";
require_once "../model/NomeSondagem.php";
class NomeSondagemControl
{
    private $dao;
    private $modelo;
    private $acao;
    function __construct()
    {
        $this->dao = new NomeSondagemDAO();
        $this->modelo = new NomeSondagem();
        $this->acao = $_REQUEST["acao"];
        $this->verificaAcao();
    }
    function verificaAcao()
    {
        switch ($this->acao) {
            case 1:
                $this->modelo->setNmSondagem($_POST["nmSondagem"]);
                $this->modelo->setNmResponsavel($_POST["nmResponsavel"]);
                $this->modelo->setDtInicio($_POST["dtInicio"]);
                $this->modelo->setDtTermino($_POST["dtTermino"]);
                $this->modelo->setNrCoordx($_POST["nrCoordx"]);
                $this->modelo->setNrCoordy($_POST["nrCoordy"]);
                $this->modelo->setNrCota($_POST["nrCota"]);
                $this->modelo->setNrDirecao($_POST["nrDirecao"]);
                $this->modelo->setNrProfundidade($_POST["nrProfundidade"]);
                $this->modelo->setNrInclinacao($_POST["nrInclinacao"]);
                $this->modelo->setNrGeoreferenciamento($_POST["nrGeoreferenciamento"]);
                $this->modelo->setTxtComentario($_POST["txtComentario"]);
                $this->dao->inserir($this->modelo);                
                header("Location:../view/CadTipoOcorrenciaSondagem.php");
                break;
            
            case 2:
                $_SESSION["id"] = $_GET['id_sondagem'];
                header("Location:../view/SondagemOcorrenciaParametros.php");
                break;
        }
    }
}
new NomeSondagemControl();
