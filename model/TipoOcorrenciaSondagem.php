<?php
class TipoOcorrenciaSondagem{
    private $profMax;
    private $tipoRocha;
    private $idNomeSondagem;
    private $profMin;

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

}