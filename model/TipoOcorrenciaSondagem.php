<?php
class TipoOcorrenciaSondagem
{
    private $nrProfundidadeMin;
    private $nrProfundidadeMax;
    private $nmTipoRocha;
    private $idNomeSondagem;
    private $nmCor;

    /**
     * @return mixed
     */
    public function getNrProfundidadeMin()
    {
        return $this->nrProfundidadeMin;
    }

    /**
     * @param mixed $profMin
     */
    public function setNrProfundidadeMin($nrProfundidadeMin)
    {
        $this->nrProfundidadeMin = $nrProfundidadeMin;
    }

    /**
     * @return mixed
     */
    public function getNrProfundidadeMax()
    {
        return $this->nrProfundidadeMax;
    }

    /**
     * @param mixed $profMax
     */
    public function setNrProfundidadeMax($nrProfundidadeMax)
    {
        $this->nrProfundidadeMax = $nrProfundidadeMax;
    }

    /**
     * @return mixed
     */
    public function getNmTipoRocha()
    {
        return $this->nmTipoRocha;
    }

    /**
     * @param mixed $tipoRocha
     */
    public function setNmTipoRocha($nmTipoRocha)
    {
        $this->nmTipoRocha = $nmTipoRocha;
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
    public function getNmCor()
    {
        return $this->nmCor;
    }

    /**
     * @param mixed $cor
     */
    public function setNmCor($nmCor)
    {
        $this->nmCor = $nmCor;
    }
}
