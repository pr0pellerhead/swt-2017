<?php 

class Avtomobil {
	private $proizvoditel;
	private $model;
	private $boja;
	private $gorivo;
	private $godina;

	public function __construct($p, $m){
		$this->setProizvoditel($p);
		$this->setModel($m);
	}

	public function setProizvoditel($p){
		$proizvoditeli = ['shkoda', 'lada', 'zastava'];

		if(in_array($p, $proizvoditeli)){
			$this->proizvoditel = $p;
		}
	}

	public function getProizvoditel(){
		return $this->proizvoditel;
	}

	public function setModel($m){
		$modeli = ['100', '200', 'panamera'];

		if(in_array($m, $modeli)){
			$this->model = $m;
		}
	}

	public function getModel(){
		return $this->model;
	}

	public function setBoja($b){
		$boi = ['crvena', 'zelena', 'zelena drech'];

		if(in_array($b, $boi)){
			$this->boja = $b;
		}
	}

	public function getBoja(){
		return $this->boja;
	}

	public function setGorivo($g){
		$goriva = ['dizel', 'benzin', 'plin', 'kerozin'];

		if(in_array($g, $goriva)){
			$this->gorivo = $g;
		}
	}

	public function getGorivo(){
		return $this->gorivo;
	}

	public function setGodina($g){
		if($g > 1910){
			$this->godina = $g;
		}
	}

	public function getGodina(){
		return $this->godina;
	}

	/*****************************/

	public function vozi(){
		echo "Si vozam jas taka so ".$this->proizvoditel.' '.$this->model.' niz grad. Inache proizvedena vo '.$this->godina.', ama kako nova e...';
	}

	public function kochi(){
		echo 'Za malce kje si ja izgrebev kolata... Koj kje bara '.$this->boja.' boja... Arno shto kolava raboti na '.$this->gorivo.' inache mozheshe da eksplodira!';
	}
}

$a1 = new Avtomobil('shkoda', '100'); // constructor

// $a1->setProizvoditel('zastava');
// $a1->setModel('panamera');
$a1->setBoja('zelena drech');
$a1->setGorivo('kerozin');
$a1->setGodina(1947);

// print_r($a1);

$a1->vozi();
$a1->kochi();


?>