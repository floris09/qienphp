<?php

class Kinderboerderij {
	public function voerRonde(Dier $dier){
		echo "We doen een voerronde voor: $dier->naam --->";
		$dier->eten();
		echo "<br>";
	}

	public function barbeque(BBQBaar $dier){
		$dier->bbqen();
	}
}

interface BBQBaar{
	public function bbqen();
}

abstract class Dier {
	public $naam;
	public $dieet;
	public $carnivoor;

	public function eten(){
		echo 'eten';
	}
}

class Varken extends Dier implements BBQBaar {
	public $spekDikte;

	public function knorren(){
		echo "knor";
	}

	public function bbqen(){
		echo "Varken op de BBQ";
	}
}

class Kip extends Dier implements BBQBaar {
	public $kleurVeren;

	public function kakelen(){
		echo "Kakaa";
	}

	public function bbqen(){
		echo "Kip op de BBQ";
	}

}

class Spin extends Dier {
	public $poten;

	public function springen(){
		echo "Spring";
	}
}

$boerderij = new Kinderboerderij();
$kip = new Kip();
$kip->naam = "Kip Jan";
$varken = new Varken();
$varken->naam = "Varken Henk";
$spin = new Spin();
$spin->naam = "Spin Klaas";

$boerderij->voerRonde($kip);
$boerderij->voerRonde($varken);
$boerderij->barbeque($varken);
