<?php

//define('NAMA', 'AgamFebriansyah');
//echo NAMA;

//echo "<br>";

//const UMUR = 20;
//echo UMUR;


//class coba {
 //   const NAMA = 'Agam';

//}

//echo coba::NAMA;


//echo __FILE__;

//function coba() {
//    return __FUNCTION__;
//}

//echo coba();

class coba {
    public $kelas = __CLASS__;

}
$obj = new coba;
echo $obj->kelas;
?>