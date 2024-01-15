<?php
require_once __DIR__ . '/Models/Categorie.php';
require_once __DIR__ . '/Models/Prodotti.php';

$prodotti = [

    new Categorie(
        "https://www.veterinari.it/images/articoli/gatti/articoli/scottish-fold-intero.jpg",
        "bobby",
        "20kg",
        "meticcio",
        new Prodotti("Guinsaglio", "400g", "", "Attrezzatura")
    ),
    new Categorie(
        "https://www.veterinari.it/images/articoli/gatti/articoli/scottish-fold-intero.jpg",
        "Skizzo",
        "13kg",
        "Meticcio",
        new Prodotti("Carne in scatola", "1kg", "1/1/2001", "Cibo Per cani")
    ),
    new Categorie(
        "https://www.veterinari.it/images/articoli/gatti/articoli/scottish-fold-intero.jpg",
        "Dory",
        "40kg",
        "PitBull",
        new Prodotti("Crochette", "1kg", "1/1/2001", "Cibo Per cani")
    ),
    new Categorie(
        "https://www.veterinari.it/images/articoli/gatti/articoli/scottish-fold-intero.jpg",
        "Luna",
        "5kg",
        "Terrier",
        new Prodotti("Pallina", "100g", "1/1/2001", "Gioco")
    ),


];
