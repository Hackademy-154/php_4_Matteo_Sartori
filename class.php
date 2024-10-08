<?php

// esercizio 1 - Lavorare con le classi astratte pt. 1


// Crea un file chiamato class.php e crea una classe astratta Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:

// Category
// -- Attualita'
// -- Sport
// -- Gossip
// -- Storia

// Tutte le classi dovranno implementare il metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo.

abstract class Category{
    abstract function getMyCategory();
}

class Attualita extends Category{
    public function getMyCategory(){
        return "Attualità";
    }
}

class Sport extends Category{
    public function getMyCategory(){
        return "Sport";
    }
}

class Gossip extends Category{
    public function getMyCategory(){
        return "Gossip";
    }
}

class Storia extends Category{
    public function getMyCategory(){
        return "Storia";
    }
}