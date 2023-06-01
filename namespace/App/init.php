<?php 

// require_once 'product/InfoProduk.php';
// require_once 'product/Produk.php';
// require_once 'product/Komik.php';
// require_once 'product/Game.php';
// require_once 'product/CetakInfoProduk.php';
// require_once 'product/user.php';

// require_once 'service/user.php';



spl_autoload_register(function($class) {
    $class = explode('\\', $class); 
    $class = end($class);
    require_once 'product/' . $class . '.php';
});

spl_autoload_register(function($class) {
    $class = explode('\\', $class); 
    $class = end($class);
    require_once 'service/' . $class . '.php';
});