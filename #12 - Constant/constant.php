<?php

// define('NAMA', 'Sholahuddin Alfatah');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;


// class Coba {
//     // define('NAMA', 'Sholahuddin Alfatah');
//     const NAMA = 'Sholahuddin Alfatah';
// }

// echo Coba::NAMA;


// echo __LINE__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

// Magic Constant
// • __LINE__
// • __FILE__
// • __DIR__
// • __FUNCTION__
// • __CLASS__
// • __TRAIT__
// • __METHOD__
// • __NAMESPACE__

?>
