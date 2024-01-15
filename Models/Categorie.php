<?php

class Categorie
{
    public $img;
    public $nome;
    public $peso;
    public $razza;
    public $prodotti;

    public function __construct($img, $name, $peso, $razza, Prodotti $prodotti)
    {
        $this->img = $img;
        $this->nome = $name;
        $this->peso = $peso;
        $this->razza = $razza;
        $this->prodotti = $prodotti;
    }
}
