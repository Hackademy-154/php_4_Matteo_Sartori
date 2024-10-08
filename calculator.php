<?php


// esercizio 4
// Crea un trait chiamato “Calculator“ definendo le seguenti operazioni tra numeri:
// 
// Crea una classe Rettangolo con due attributi
// Base (b);
// Altezza (h);
// Crea tre metodi che vanno a calcolare:
// Area → b * h;
// Perimetro → 2 * b + 2 * h;
// Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)
// Per fare questi calcoli dovete sfruttare le funzioni del Trait Calculator
//  extra: provate a creare classi per altre figure geometriche e calcolare area e perimetro anche lì sempre sfruttando il trait

trait Calculator{
    public function sum($a, $b) {
        return $a + $b;
      }
      public function sub($a, $b) {
        return $a - $b;
      }
      public function mul($a, $b) {
        return $a * $b;
      }
      public function div($a, $b) {
        return $a / $b;
      }
      public function sqr($a){
        return sqrt($a);
      }
}

class Rettangolo{

   use Calculator;

   public $Base;
   public $Altezza;

    public function __construct($b,$a){
        $this->Base=$b;
        $this->Altezza=$a;
    }

    public function Area(){
        return "L'Area del rettangolo è: " . $this->mul($this->Base,$this->Altezza);
    }

    public function Perimetro(){
        return "\nIl Perimetro del rettangolo è: " . $this->sum($this->mul(2,$this->Base),$this->mul(2,$this->Altezza));
    }

    public function Diagonale(){
        return "\nLa Diagonale del rettangolo è: " . $this->sqr($this->sum($this->mul($this->Altezza,$this->Altezza),$this->mul($this->Base,$this->Base)));
    }
    
}

$Rettangolo= new Rettangolo(10,20);
echo $Rettangolo->Area();
echo $Rettangolo->Perimetro();
echo $Rettangolo->Diagonale();