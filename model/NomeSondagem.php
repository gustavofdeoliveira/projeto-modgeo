<?php
class nomeSondagem
{
    private $nmSondagem;
    private $nmResponsavel;
    private $dtInicio;
    private $dtTermino;
    private $nrCoordx;
    private $nrCoordy;
    private $nrCota;
    private $nrDirecao;
    private $nrProfundidade;
    private $nrInclinacao;
    private $nrGeoreferenciamento;
    private $txtComentario;

    /**
     * @return mixed
     */
    public function getNmSondagem()
    {
        return $this->nmSondagem;
    }

    /**
     * @param mixed $nome
     */
    public function setNmSondagem($nmSondagem)
    {
        $this->nmSondagem = $nmSondagem;
    }

    /**
     * @return mixed
     */
    public function getNmResponsavel()
    {
        return $this->nmResponsavel;
    }

    /**
     * @param mixed $responsavel
     */
    public function setNmResponsavel($nmResponsavel)
    {
        $this->nmResponsavel = $nmResponsavel;
    }

    /**
     * @return mixed
     */
    public function getDtInicio()
    {
        return $this->dtInicio;
    }

    /**
     * @param mixed $inico
     */
    public function setDtInicio($dtInicio)
    {
        $this->dtInicio = $dtInicio;
    }

    /**
     * @return mixed
     */
    public function getDtTermino()
    {
        return $this->dtTermino;
    }

    /**
     * @param mixed $termino
     */
    public function setDtTermino($dtTermino)
    {
        $this->dtTermino = $dtTermino;
    }

    /**
     * @return mixed
     */
    public function getNrCoordx()
    {
        return $this->nrCoordx;
    }

    /**
     * @param mixed $coordx
     */
    public function setNrCoordx($nrCoordx)
    {
        $this->nrCoordx = $nrCoordx;
    }

    /**
     * @return mixed
     */
    public function getNrCoordy()
    {
        return $this->nrCoordy;
    }

    /**
     * @param mixed $coordy
     */
    public function setNrCoordy($nrCoordy)
    {
        $this->nrCoordy = $nrCoordy;
    }

    /**
     * @return mixed
     */
    public function getNrCota()
    {
        return $this->nrCota;
    }

    /**
     * @param mixed $cota
     */
    public function setNrCota($nrCota)
    {
        $this->nrCota = $nrCota;
    }

    /**
     * @return mixed
     */
    public function getNrDirecao()
    {
        return $this->nrDirecao;
    }

    /**
     * @param mixed $direcao
     */
    public function setNrDirecao($nrDirecao)
    {
        $this->nrDirecao = $nrDirecao;
    }

    /**
     * @return mixed
     */
    public function getNrProfundidade()
    {
        return $this->nrProfundidade;
    }

    /**
     * @param mixed $profundidade
     */
    public function setNrProfundidade($nrProfundidade)
    {
        $this->nrProfundidade = $nrProfundidade;
    }

    /**
     * @return mixed
     */
    public function getNrInclinacao()
    {
        return $this->nrInclinacao;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setNrInclinacao($nrInclinacao)
    {
        $this->nrInclinacao = $nrInclinacao;
    }

    /**
     * @return mixed
     */
    public function getNrGeoreferenciamento()
    {
        return $this->nrGeoreferenciamento;
        ;
    }

    /**
     * @param mixed $georeferenciamento
     */
    public function setNrGeoreferenciamento($nrGeoreferenciamento)
    {
        $this->nrGeoreferenciamento = $nrGeoreferenciamento;
    }

    /**
     * @return mixed
     */
    public function getTxtComentario()
    {
        return $this->txtComentario;
    }

    /**
     * @param mixed $comentario
     */
    public function setTxtComentario($txtComentario)
    {
        $this->txtComentario = $txtComentario;
    }
}
