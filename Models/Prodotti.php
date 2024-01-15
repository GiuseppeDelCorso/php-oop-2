<?php

class Prodotti
{
    public $nome;
    public $peso;
    public $scadenza;
    public $tipologia;

    public function __construct($name, $peso, $scadenza, $tipologia,)
    {
        $this->nome = $name;
        $this->peso = $peso;
        $this->scadenza = $scadenza;
        $this->tipologia = $tipologia;
    }
}
