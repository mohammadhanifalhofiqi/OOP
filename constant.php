<?php

// define ('NAMA', 'Mohammad Hanif Alhofiqi');
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;

// class Coba{
// 	const NAMA = 'Hanif';
// }
// echo Coba::NAMA;


//echo __File__;




// function coba(){
// 	return __FUNCTION__;
// }
//  echo coba();
 

 class coba{
 	public $kelas = __CLASS__;
 }

$obj = new Coba;
echo $obj->kelas;




?>