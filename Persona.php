<?php
class Persona
{
    protected $nome;
    protected $cognome;

    public function __construct($nome, $cognome)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    function getCognome()
    {
        return $this->cognome;
    }

    function __toString()
    {
        echo "<ul><li>" . $this->nome . "</li><li>" . $this->cognome . "</li></ul>";
    }

    function presentati(){
        echo "Ciao io sono " . $this->nome . " " . $this->cognome;
    }
}
