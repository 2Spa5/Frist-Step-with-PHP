<?php
class Veicolo
{
    protected $marca;
    protected $anno;

    public function __construct($marca, $anno)
    {
        $this->marca = $marca;
        $this->anno = $anno;
    }

    function setMarca($marca)
    {
        $this->marca = $marca;
    }

    function getMarca()
    {
        return $this->marca;
    }

    function setAnno($anno)
    {
        $this->anno = $anno;
    }

    function getAnno()
    {
        return $this->anno;
    }

    function __toString()
    {
        echo "<ul><li>" . $this->marca . "</li><li>" . $this->anno . "</li></ul>";
    }
}
