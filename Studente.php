<?php
class Studente extends Persona
{
    protected $matricola;

    public function __construct($nome, $cognome, $matricola)
    {
        parent::__construct($nome, $cognome);
        $this->matricola = $matricola;
    }

    function setEta($matricola)
    {
        $this->matricola = $matricola;
    }

    function getEta()
    {
        return $this->matricola;
    }

    function __toString()
    {
        echo "<ul><li>" . $this->nome . "</li><li>" . $this->cognome . "</li><li>" . $this->matricola . "</li></ul>";
    }

    function presentati(){
        echo "Ciao io sono " . $this->nome . " " . $this->cognome . ", il mio numero di matricola e' " . $this->matricola;
    }
}
