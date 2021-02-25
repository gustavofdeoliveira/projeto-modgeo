<?php
require_once("../control/Conexao.php");

class TipoRochaSondagemDAO
{
    private $conn;
    function __construct()
    {
        $this->conn = Conexao::conectar();
    }
    function inserir(TipoRochaSondagem $modelo)
    {
        $sql = "insert into tipo_rocha_sondagem(profundidade_min, profundidade_max, tipo_rocha, id_sondagem)values('" . $modelo->getProfMin() . "','" . $modelo->getProfMax() . "','" . $modelo->getTipoRocha() . "','" .
            $modelo->getIdNomeSondagem() . "')";

        echo $sql;
        $this->conn->exec($sql);
    }
}
