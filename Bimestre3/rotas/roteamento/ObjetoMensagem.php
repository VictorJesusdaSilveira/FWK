<?php

class ObjetoMensagem
{
    private $nome;

    public function __construct($nome = "Objeto Padrão")
    {
        $this->nome = $nome;
    }

    public function criar()
    {
        return "Sucesso: O objeto '{$this->nome}' foi criado com sucesso!";
    }

    public function status()
    {
        return "O objeto '{$this->nome}' está ativo no sistema.";
    }
}