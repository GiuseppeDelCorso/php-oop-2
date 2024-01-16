<?php

require_once __DIR__ . '/Prodotti.php';

class Giochi extends Prodotti
{
    public $sconto;

    public function __construct($img, $nome, $prezzo, Categorie $categoria, $sconto)
    {
        parent::__construct($img, $nome, $prezzo, $categoria);
        $this->sconto = $sconto;
    }
}
