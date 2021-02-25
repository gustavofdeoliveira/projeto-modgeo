<?php
require_once "../dao/TipoRochaSondagemDAO.php";
require_once "../model/TipoRochaSondagem.php";
session_start();

class TipoRochaSondagemControl
{
    private $dao;
    private $modelo;
    private $acao;
    function __construct()
    {
        $this->dao = new TipoRochaSondagemDAO();
        $this->modelo = new TipoRochaSondagem();
        $this->acao = $_REQUEST["acao"];
        $this->verificaAcao();
    }
    function verificaAcao()
    {
        switch ($this->acao) {
            case 1:
                $this->modelo->setProfMin($_POST["profMin"]);
                $this->modelo->setProfMax($_POST["profMax"]);
                $this->modelo->setTipoRocha($_POST["tipoRocha"]);
                $this->modelo->setIdNomeSondagem($_SESSION["id"]);
                $this->dao->inserir($this->modelo);
                break;
        }
    }
}

new TipoRochaSondagemControl();