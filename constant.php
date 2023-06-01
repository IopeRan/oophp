<?php 

// define('NAMA', 'Erlang Andriyanputra');
// echo NAMA;

// echo "<br>";

// const UMUR  = 15;
// echo UMUR;

// class Coba {
//     const NAMA = 'Erlang';
// }

// echo COBA::NAMA;



// echo __FILE__;


// function Coba() {
//     return __FUNCTION__;
// }

// echo Coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;