<?php
class Cane extends Animale
{
    protected $razza;

    public function __construct($nome, $eta, $razza)
    {
        parent::__construct($nome, $eta);
        $this->razza = $razza;
    }

    function setRazza($razza)
    {
        $this->nome = $razza;
    }

    function getRazza()
    {
        return $this->razza;
    }

    function __toString()
    {
        echo "<ul><li>" . $this->nome . "</li><li>" . $this->eta . "</li><li>" . $this->razza . "</li></ul>";
    }

    function verso(){
        echo "BAU!!!!!";
    }
}
