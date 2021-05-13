<?php
class TipoOcorrenciaSondagem
{
    private $profMin;
    private $profMax;
    private $tipoRocha;
    private $idNomeSondagem;    
    private $cor;
    private $hachuras;

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
    public function getIdNomeSondagem()
    {
        return $this->idNomeSondagem;
    }

    /**
     * @param mixed $idNomeSondagem
     */
    public function setIdNomeSondagem($idNomeSondagem)
    {
        $this->idNomeSondagem = $idNomeSondagem;
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

}
