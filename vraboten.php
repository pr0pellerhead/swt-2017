<?php 

abstract class Vraboten {
	private $ime;
	private $prezime;
	private $staz;
	private $plata;

	public function __set($name, $value){
		if(property_exists($this, $name)){
			$this->$name = $value;
			// $this->ime = 'Pero';
		}
	}

	public function __get($name){
		if(property_exists($this, $name)){
			return $this->$name;
		}
	}
}

interface iVraboten {
	public function raboti();
}

class Smetkovoditel extends Vraboten implements iVraboten {
	public function raboti(){
		echo $this->ime.' '.$this->prezime.' smetkovodstvuva...';
	}	
}

class Profesor extends Vraboten implements iVraboten {
	public function raboti(){
		echo $this->ime.' '.$this->prezime.' profesoruva...';
	}	
}

class Prazna extends Vraboten {}

// $v = new Vraboten;
$r = new Prazna;

// $p = new Profesor;
// $p->ime = 'Pero';
// $p->prezime = 'Perovski';
// $p->staz = 10;
// $p->plata = 0;
// $p->raboti();
// echo $p->plata;

// print_r($p);

// $s = new Smetkovoditel;
// $s->ime = 'Janko';
// $s->prezime = 'Jankovski';
// $s->staz = 3;
// $s->plata = 10000000000000;
// $s->raboti();
// echo $s->plata;

// print_r($s);

?>