<?php
class gunung {

	var $namagunung;
	var $ketinggian;
	var $letakgunung;

	public function setNamagunung($namagunung=''){
		$this->namagunung=$namagunung;
	}

	public function setKetinggian($ketinggian=''){
		$this->ketinggian=$ketinggian;
	}

	public function setLetakgunung($letakgunung=''){
		$this->letakgunung=$letakgunung;
	}

	public function cetak(){
		echo 'namagunung:'.$this->namagunung;
		echo'<br>';
		echo 'ketinggian:'.$this->ketinggian;
		echo'<br>';
		echo 'letakgunung:'.$this->letakgunung;
		echo'<br>';
	}
}
$bromo = new gunung();
$bromo->setNamagunung('bromo');
$bromo->setKetinggian('2329');
$bromo->setLetakgunung('jawatimur');
$bromo->cetak();

	echo'<br>';

$semeru = new gunung();
$semeru->setNamagunung('semeru');
$semeru->setKetinggian('3636');
$semeru->setLetakgunung('jawatimur');
$semeru->cetak();

	echo'<br>';

$salak = new gunung();
$salak->setNamagunung('salak');
$salak->setKetinggian('2329');
$salak->setLetakgunung('sukabumi');
$salak->cetak();