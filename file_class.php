<?php 

// class File {

// 	private $filename;
// 	private $handle;

// 	public function __construct($filename){
// 		if(file_exists($filename)){
// 			$this->filename = $filename;
// 			$this->handle = fopen($filename, 'a+');
// 		} else {
// 			exit('File does not exist');
// 		}
// 	}

// 	public function write($text){
// 		fwrite($this->handle, $text);
// 	}

// 	public function read(){
// 		rewind($this->handle);
// 		$size = filesize($this->filename);
// 		return fread($this->handle, $size);
// 	}

// 	public function __destruct(){
// 		fclose($this->handler);
// 	}
// }

// $f = new File('testfile.txt');
// $f->write('test test test test ');
// echo $f->read();






class File {
	private $handle;
	private $filename;

	public function __construct($filename){
		$this->filename = $filename;
		$this->handle = fopen($filename, 'a+');
	}

	public function write($text){
		fwrite($this->handle, $text);
	}

	public function read(){
		rewind($this->handle);
		return fread($this->handle, filesize($this->filename));
	}
}


$f = new File('fajl.txt');
$f->write('text bla bla bla');
echo $f->read();

$domashna = new File('domashna_nikola.txt');
$domashna->write('Nemam domashna za fajlovi i klasi... :( ');



























?>