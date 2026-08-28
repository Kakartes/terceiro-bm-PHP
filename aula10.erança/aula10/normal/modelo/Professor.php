<?php

require_once("modelo/Pessoa.php");

class Professor extends Pessoa{

    private $nome;
    private $rg;
    private $idade;
    private $sala;


    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of rg
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set the value of rg
     */
    public function setRg($rg): self
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of sala
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * Set the value of sala
     */
    public function setSala($sala): self
    {
        $this->sala = $sala;

        return $this;
    }
}