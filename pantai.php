<?php
class pantai {

	var $namapantai;
	var $kedalaman;
	var $warnapasir;

	public function setNamapantai($namapantai=''){
		$this->namapantai=$namapantai;
	}

	public function setKedalaman($kedalaman=''){
		$this->kedalaman=$kedalaman;
	}

	public function setWarnapasir($warnapasir=''){
		$this->warnapasir=$warnapasir;
	}

	public function cetak(){
		echo 'namapantai:'.$this->namapantai;
		echo'<br>';
		echo 'kedalaman:'.$this->kedalaman;
		echo'<br>';
		echo 'warnapasir:'.$this->warnapasir;
		echo'<br>';
	}
}
$kartini = new pantai();
$kartini->setNamapantai('kartini');
$kartini->setKedalaman(1200);
$kartini->setWarnapasir('putih');
$kartini->cetak();

	echo'<br>';

$telukawur = new pantai();
$telukawur->setNamapantai('telukawur');
$telukawur->setKedalaman(3500);
$telukawur->setWarnapasir('hitam');
$telukawur->cetak();

	echo'<br>';

$bandengan = new pantai();
$bandengan->setNamapantai('bandengan');
$bandengan->setKedalaman(1500);
$bandengan->setWarnapasir('coklat');
$bandengan->cetak();