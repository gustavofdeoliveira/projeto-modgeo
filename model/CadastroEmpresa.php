<?php
class cadastroEmpresa
{
    private $nome;
    private $cnpj;
    private $cidadeOrigem;
    private $email;
    private $telefone;
    
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return mixed
     */
    public function getCidadeOrigem()
    {
        return $this->cidadeOrigem;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setCidadeOrigem($cidadeOrigem)
    {
        $this->cidadeOrigem = $cidadeOrigem;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $inclinacao
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
}
