<?php 

class Classroom {
    private $name;
    private $capacity;
    private $sittingArrangement;

    public static $SITTING_CIRCULAR = 'circular';
    public static $SITTING_ROWS = 'rows';

    public function __construct($n) {
        $this->name = $n;
    }

    public function __destruct(){
        echo '<br/> The classroom ' . $this->name . ' has been closed';
    }

    public function setCapacity($c) {
        if(is_int($c)){
            $this->capacity = $c;
        }
    }
    public function setSittingArrangement($a){
        $sa = ['rows', 'circular'];
        if(in_array($a, $sa)){
            $this->sittingArrangement = $a;
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getCapacity(){
        return $this->capacity;
    }

    public function getSittingArrangement(){
        return $this->sittingArrangment;
    }
}


$c1 = new Classroom ('a1');
$c1->setCapacity(12);
$c1->setSittingArrangement(Classroom::$SITTING_ROWS); //static properties in use


echo '<br/>';

print_r($c1);

$c2 = new Classroom ('b1');
$c2->setCapacity('20');
$c2->setSittingArrangement(Classroom::$SITTING_CIRCULAR); //static properties in use

echo '<br/>';

print_r($c2);


class MotornoVozilo {
    protected $zafatninaNaMotor; // protected allows child classes to access property
    protected $potroshuvacka; // protected allows child classes to access property

    public function setZafatnina($z){
        $this->zafatninaNaMotor = $z;
    }

    public function setPotroshuvacka($p){
        $this->potroshuvacka = $p;
    }

    public function getZafatnina(){
        return $this->zafatinaNaMotor;
    }

    public function getPotroshuvacka(){
        return $this->potroshuvacka;
    }
}

class Avtomobil extends MotornoVozilo {
    private $klasa;

    public function setKlasa($k){
        $this->klasa = $k;
    }

    public function getKlasa() {
        return $this->klasa;
    }

    public function opis(){
        echo 'Klasa: ' . $this->klasa . ' Zafatnina: ' . $this->zafatninaNaMotor . ' Potroshuvacka: ' . $this->potroshuvacka;
    }
}

$av1 = new Avtomobil;
echo '<br/>';
$av1->setPotroshuvacka(6.5);
$av1->setZafatnina(1900);
$av1->setKlasa('bmw');
$av1->opis();
// print_r($av1);



?>