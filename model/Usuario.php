<?php

class Usuario
{
    private $nmUsuario;
    private $nrCpf;
    private $dtNascimento;
    private $nmEmail;
    private $nrTelefone;
    private $nmCargo;
    private $nmLogin;
    private $nmSenha;

    /**
     * @return mixed
     */
    public function getNmUsuario()
    {
        return $this->nmUsuario;
    }

    /**
     * @param mixed $profMin
     */
    public function setNmUsuario($nmUsuario)
    {
        $this->nmUsuario = $nmUsuario;
    }

    /**
     * @return mixed
     */
    public function getNrCpf()
    {
        return $this->nrCpf;
    }

    /**
     * @param mixed $profMin
     */
    public function setNrCpf($nrCpf)
    {
        $this->nrCpf = $nrCpf;
    }

    /**
     * @return mixed
     */
    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    /**
     * @param mixed $profMin
     */
    public function setDtNascimento($dtNascimento)
    {
        $this->dtNascimento = $dtNascimento;
    }

    /**
     * @return mixed
     */
    public function getNmEmail()
    {
        return $this->nmEmail;
    }

    /**
     * @param mixed $profMin
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
     * @param mixed $profMin
     */
    public function setNrTelefone($nrTelefone)
    {
        $this->nrTelefone = $nrTelefone;
    }

    /**
     * @return mixed
     */
    public function getNmCargo()
    {
        return $this->nmCargo;
    }

    /**
     * @param mixed $profMin
     */
    public function setNmCargo($nmCargo)
    {
        $this->nmCargo = $nmCargo;
    }

    /**
     * @return mixed
     */
    public function getNmLogin()
    {
        return $this->nmLogin;
    }

    /**
     * @param mixed $profMin
     */
    public function setNmLogin($nmLogin)
    {
        $this->nmLogin = $nmLogin;
    }

    /**
     * @return mixed
     */
    public function getNmSenhaLogin()
    {
        return $this->nmSenha;
    }

    /**
     * @param mixed $profMin
     */
    public function setNmSenha($nmSenha)
    {
        $this->nmSenha = $nmSenha;
    }
}
