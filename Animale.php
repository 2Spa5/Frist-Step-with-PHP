<?php
class Animale
{
    protected $nome;
    protected $eta;

    public function __construct($nome, $eta)
    {
        $this->nome = $nome;
        $this->eta = $eta;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setEta($eta)
    {
        $this->eta = $eta;
    }

    function getEta()
    {
        return $this->eta;
    }

    function __toString()
    {
        echo "<ul><li>" . $this->nome . "</li><li>" . $this->eta . "</li></ul>";
    }

    function verso(){
        echo "*rumore*";
    }
}
