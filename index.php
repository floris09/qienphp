<?php

$boerderij = new Kinderboerderij();
$kip = new Kip();
$kip->naam = "Kip Jan";
$varken = new Varken();
$varken->naam = "Varken Henk";

$boerderij->voerRonde($kip);
$boerderij->voerRonde($varken);


class Kinderboerderij {
	public function voerRonde(Dier $dier){
		echo "We doen een voerronde voor: $dier->naam <br>";
	}
}

abstract class Dier {
	public $naam;
	public $dieet;
	public $carnivoor;

	public function eten(){
		echo 'eten';
	}
}

class Varken extends Dier {
	public $spekDikte;

	public function knorren(){
		echo "knor";
	}
}

class Kip extends Dier {
	public $kleurVeren;

	public function kakelen(){
		echo "Kakaa";
	}

}
