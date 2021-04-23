<?php
class nomeSondagem{
    private $nome;
    private $coordx;
    private $coordy;
    private $cota;
    private $profundidade;
    private $inclinacao;
    private $georeferenciamento;

    /**
     * @return mixed
     */
    public function getInclinacao()
    {
        return $this->inclinacao;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setInclinacao($inclinacao)
    {
        $this->inclinacao = $inclinacao;
    }

    /**
     * @return mixed
     */
    public function getGeoreferenciamento()
    {
        return $this->georeferenciamento;
    }

    /**
     * @param mixed $georeferenciamento
     */
    public function setGeoreferenciamento($georeferenciamento)
    {
        $this->georeferenciamento = $georeferenciamento;
    }

    /**
     * @return mixed
     */
    public function getProfundidade()
    {
        return $this->profundidade;
    }

    /**
     * @param mixed $profundidade
     */
    public function setProfundidade($profundidade)
    {
        $this->profundidade = $profundidade;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCoordx()
    {
        return $this->coordx;
    }

    /**
     * @param mixed $coordx
     */
    public function setCoordx($coordx)
    {
        $this->coordx = $coordx;
    }

    /**
     * @return mixed
     */
    public function getCoordy()
    {
        return $this->coordy;
    }

    /**
     * @param mixed $coordenaday
     */
    public function setCoordy($coordy)
    {
        $this->coordy = $coordy;
    }

    /**
     * @return mixed
     */
    public function getCota()
    {
        return $this->cota;
    }

    /**
     * @param mixed $cota
     */
    public function setCota($cota)
    {
        $this->cota = $cota;
    }


}