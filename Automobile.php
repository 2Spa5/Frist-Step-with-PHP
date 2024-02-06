<?php
class Automobile extends Veicolo
{
    protected $modello;

    public function __construct($modello, $marca, $anno)
    {
        parent::__construct($marca, $anno);
        $this->modello = $modello;
    }

    function setMarca($modello)
    {
        $this->modello = $modello;
    }

    function getModello()
    {
        return $this->modello;
    }

    function __toString()
    {
        echo "<ul><li>" . $this->marca . "</li><li>" . $this->anno . "</li><li>" . $this->modello . "</li></ul>";
    }
}
