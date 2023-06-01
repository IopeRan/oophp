<?php 

// require_once 'product/InfoProduk.php';
// require_once 'product/Produk.php';
// require_once 'product/Komik.php';
// require_once 'product/Game.php';
// require_once 'product/CetakInfoProduk.php';


spl_autoload_register(function($class) {
    require_once 'product/' . $class . '.php';
});