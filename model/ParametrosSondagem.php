<?php 
class ParametrosSondagem{
    private $nrAlteracao;
    private $nrConsistencia;
    private $nrFraturamento;
    private $nrRqd;
    private $idNomeSondagem;

    /**
     * @return mixed
     */
    public function getNrAlteracao()
    {
        return $this->nrAlteracao;
    }

    /**
     * @param mixed $alteracao
     */
    public function setNrAlteracao($nrAlteracao)
    {
        $this->nrAlteracao = $nrAlteracao;
    }

    /**
     * @return mixed
     */
    public function getNrConsistencia()
    {
        return $this->nrConsistencia;
    }

    /**
     * @param mixed $consistecia
     */
    public function setNrConsistencia($nrConsistencia)
    {
        $this->nrConsistencia = $nrConsistencia;
    }

    /**
     * @return mixed
     */
    public function getNrFraturamento()
    {
        return $this->nrFraturamento;
    }

    /**
     * @param mixed $fraturamento
     */
    public function setNrFraturamento($nrFraturamento)
    {
        $this->nrFraturamento = $nrFraturamento;
    }

    /**
     * @return mixed
     */
    public function getNrRqd()
    {
        return $this->nrRqd;
    }

    /**
     * @param mixed $rqd
     */
    public function setNrRqd($nrRqd)
    {
        $this->nrRqd = $nrRqd;
    }

    /**
     * @return mixed
     */
    public function getIdNomeSondagem()
    {
        return $this->idNomeSondagem;
    }

    /**
     * @param mixed $idSondagem
     */
    public function setIdNomeSondagem($idNomeSondagem)
    {
        $this->idNomeSondagem = $idNomeSondagem;
    }
}
