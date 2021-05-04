<?php
require_once "../dao/TipoOcorrenciaSondagemDAO.php";
require_once "../model/TipoOcorrenciaSondagem.php";
<<<<<<< HEAD

class TipoRochaSondagemControl
{
    private $dao;
    private $modelo;
    private $acao;
    function __construct()
    {
        $this->dao = new TipoOcorrenciaSondagemDAO();
        $this->modelo = new TipoOcorrenciaSondagem();
        $this->acao = $_REQUEST["acao"];
        $this->verificaAcao();
    }
    function verificaAcao()
    {
        switch ($this->acao) {
=======
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
>>>>>>> upstream/main
            case 1:
                $this->modelo->setProfMin($_POST["profMin"]);
                $this->modelo->setProfMax($_POST["profMax"]);
                $this->modelo->setTipoRocha($_POST["tipoRocha"]);
<<<<<<< HEAD
                $this->modelo->setIdNomeSondagem($_SESSION["id"]);                
                $this->modelo->setCor($_POST["cor"]);                
                $this->modelo->setHachuras($_POST["hachuras"]);
                $this->dao->inserir($this->modelo);
                break;
        }
    }
}

new TipoRochaSondagemControl();
=======
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
>>>>>>> upstream/main
