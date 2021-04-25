<?php
class nomeSondagem
{
    private $nome;
    private $responsavel;
    private $inicio;
    private $termino;
    private $coordx;
    private $coordy;
    private $cota;
    private $direcao;
    private $profundidade;
    private $inclinacao;
    private $georeferenciamento;
    private $comentario;

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
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * @param mixed $responsavel
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;
    }

    /**
     * @return mixed
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * @param mixed $inico
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;
    }

    /**
     * @return mixed
     */
    public function getTermino()
    {
        return $this->termino;
    }

    /**
     * @param mixed $termino
     */
    public function setTermino($termino)
    {
        $this->termino = $termino;
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
     * @param mixed $coordy
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

    /**
     * @return mixed
     */
    public function getDirecao()
    {
        return $this->direcao;
    }

    /**
     * @param mixed $direcao
     */
    public function setDirecao($direcao)
    {
        $this->direcao = $direcao;
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
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * @param mixed $comentario
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
    }
}
