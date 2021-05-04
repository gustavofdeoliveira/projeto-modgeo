<?php 
class ParametrosSondagem{
    private $alteracao;
    private $consistencia;
    private $fraturamento;
    private $rqd;
    private $idNomeSondagem;

    /**
     * @return mixed
     */
    public function getAlteracao()
    {
        return $this->alteracao;
    }

    /**
     * @param mixed $alteracao
     */
    public function setAlteracao($alteracao)
    {
        $this->alteracao = $alteracao;
    }

    /**
     * @return mixed
     */
    public function getConsistencia()
    {
        return $this->consistencia;
    }

    /**
     * @param mixed $consistecia
     */
    public function setConsistencia($consistencia)
    {
        $this->consistencia = $consistencia;
    }

    /**
     * @return mixed
     */
    public function getFraturamento()
    {
        return $this->fraturamento;
    }

    /**
     * @param mixed $fraturamento
     */
    public function setFraturamento($fraturamento)
    {
        $this->fraturamento = $fraturamento;
    }

    /**
     * @return mixed
     */
    public function getRqd()
    {
        return $this->rqd;
    }

    /**
     * @param mixed $rqd
     */
    public function setRqd($rqd)
    {
        $this->rqd = $rqd;
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
