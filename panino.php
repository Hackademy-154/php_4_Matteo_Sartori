<?php
// Bread
abstract class Bread{
    abstract public function breadType();
}

class WhiteBread extends Bread{
    public function breadType(){
        return "Pane Bianco";
    }
}
class BlackBread extends Bread{
    public function breadType(){
        return "Pane nero al carbone vegetale";
    }
}
class WholeGrainBread extends Bread{
    public function breadType(){
        return "Pane integrale triste";
    }
}
class greenBread extends Bread{
    public function breadType(){
        return "Pane verde alla clorofilla";
    }
}
// Meat
abstract class Meat{
    abstract public function meatType();
}

class FriedChicken extends Meat{
    public function meatType(){
        return "Pollo Fritto";
    }
}
class BlackAngus extends Meat{
    public function meatType(){
        return "Carne BlackAngus";
    }
}
class PulledPork extends Meat{
    public function meatType(){
        return "Pulled Pork";
    }
}
class Hamburger extends Meat{
    public function meatType(){
        return "Hamburger Manzo";
    }
}
// Sauces
abstract class Sauce{
    abstract public function sauceType();
}

class BBQ extends Sauce{
    public function sauceType(){
        return "Salsa BBQ";
    }
}
class Mayonnaise extends Sauce{
    public function sauceType(){
        return "Salsa Mayonese";
    }
}
class Ketchup extends Sauce{
    public function sauceType(){
        return "Salsa Ketchup";
    }
}
class CocktailSuce extends Sauce{
    public function sauceType(){
        return "Salsa rosa";
    }
}
// Costruzione Panino
class Sandwich{
    public $bread,$meat,$sauce;
    public function __construct(Bread $paneScelto,Meat $carneScelta, Sauce $salsaScelta){
        $this->bread = $paneScelto;
        $this->meat = $carneScelta;
        $this->sauce = $salsaScelta;
    }
    public function getSandwich(){
        echo "\nPane scelto: " . $this->bread->breadType() . "\n";
        echo "Carne scelta: " . $this->meat->meatType() . "\n";
        echo "Salsa scelta: " . $this->sauce->sauceType() . "\n";
    }
}

$panino1 = new Sandwich(new BlackBread(), new BlackAngus(), new BBQ());

$panino1->getSandwich();