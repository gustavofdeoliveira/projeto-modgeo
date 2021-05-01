<?php
class TipoOcorrenciaSondagem
{
    private $profMin;
    private $profMax;
    private $tipoRocha;
    private $idSondagem;
    private $hachuras;
    private $cor;

    /**
     * @return mixed
     */
    public function getProfMin()
    {
        return $this->profMin;
    }

    /**
     * @param mixed $profMin
     */
    public function setProfMin($profMin)
    {
        $this->profMin = $profMin;
    }

    /**
     * @return mixed
     */
    public function getProfMax()
    {
        return $this->profMax;
    }

    /**
     * @param mixed $profMax
     */
    public function setProfMax($profMax)
    {
        $this->profMax = $profMax;
    }

    /**
     * @return mixed
     */
    public function getTipoRocha()
    {
        return $this->tipoRocha;
    }

    /**
     * @param mixed $tipoRocha
     */
    public function setTipoRocha($tipoRocha)
    {
        $this->tipoRocha = $tipoRocha;
    }

    /**
     * @return mixed
     */
    public function getIdSondagem()
    {
        return $this->idSondagem;
    }

    /**
     * @param mixed $idNomeSondagem
     */
    public function setIdSondagem($idSondagem)
    {
        $this->idNomeSondagem = $idSondagem;
    }

    /**
     * @return mixed
     */
    public function getHachuras()
    {
        return $this->hachuras;
    }

    /**
     * @param mixed $hachuras
     */
    public function setHachuras($hachuras)
    {
        $this->hachuras = $hachuras;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     */
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
}
