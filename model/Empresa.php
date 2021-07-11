<?php
class Empresa
{
    private $nmEmpresa;
    private $nrCnpj;
    private $nmCidadeOrigem;
    private $nmEmail;
    private $nrTelefone;
    
    /**
     * @return mixed
     */
    public function getNmEmpresa()
    {
        return $this->nmEmpresa;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setNmEmpresa($nmEmpresa)
    {
        $this->nmEmpresa = $nmEmpresa;
    }

    /**
     * @return mixed
     */
    public function getNrCnpj()
    {
        return $this->nrCnpj;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setNrCnpj($nrCnpj)
    {
        $this->nrCnpj = $nrCnpj;
    }

    /**
     * @return mixed
     */
    public function getNmCidadeOrigem()
    {
        return $this->nmCidadeOrigem;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setNmCidadeOrigem($nmCidadeOrigem)
    {
        $this->nmCidadeOrigem = $nmCidadeOrigem;
    }

    /**
     * @return mixed
     */
    public function getNmEmail()
    {
        return $this->nmEmail;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setNmEmail($nmEmail)
    {
        $this->nmEmail = $nmEmail;
    }

    /**
     * @return mixed
     */
    public function getNrTelefone()
    {
        return $this->nrTelefone;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setNrTelefone($nrTelefone)
    {
        $this->nrTelefone = $nrTelefone;
    }
}
