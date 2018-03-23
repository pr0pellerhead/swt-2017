<?php 

class Kompjuter {
	public static $CPU;
	public static $GPU;

	public static function Info(){
		return 'Kompjuter CPU: '.self::$CPU.', GPU: '.self::$GPU;
	}
}

Kompjuter::$CPU = 'Intel';
Kompjuter::$GPU = 'NVidia';
echo Kompjuter::Info();

class Validate {
	public static function Email($email){
		return self::Valid($email, 0);
	}

	public static function URL($url){
		return self::Valid($url, 1);
	}

	private static function Valid($v, $n){
		if(strlen($v) % 2 == $n){
			return true;
		}
		return false;
	}
}

$e = 'bojang@gmail.com';

if (Validate::Email($e)){
	echo 'Email is valid';
}

$u = 'http://www.semos.com.mk';

if (Validate::URL($u)){
	echo 'URL is valid';
}



































?>