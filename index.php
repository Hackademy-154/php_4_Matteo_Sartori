<?php
require_once "class.php";

// esercizio 2 - Lavorare con le classi astratte pt. 2

// Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi
// Titolo
// Categoria
// Tag
// Crea delle istanze di classe Post, iniettando la dipendenze Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi.
// hint: utilizzare la funzione di php require_once(); per richiamare il file  in index.php

class Post  {

    public $Titolo;
    public $Categoria;
    public $Tag;

    public function __construct($Titolo,Category $Categoria,$Tag){
        $this->Titolo = $Titolo;
        $this->Categoria = $Categoria;
        $this->Tag = $Tag;
    }

    public function viewCompleteArticles(){
        echo "Titolo: {$this->Titolo}\nCategoria: {$this->Categoria->getMyCategory()}\nTag: {$this->Tag}\n";
    }
}

$Attualita = new Attualita();
$Sport = new Sport();
$Gossip = new Gossip();
$Storia = new Storia();

$post1 = new Post("Beradeth",$Gossip,"molto molto pratico");

$post1->viewCompleteArticles();

