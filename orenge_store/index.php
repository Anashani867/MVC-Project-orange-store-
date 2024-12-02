<?php

$route = [
    '/' => 'views/pages/index.view.php',
    '/products' => 'controllers/products/show.products.php',
    '/pricing' => 'views/pages/pricing.php',
    '404' => 'views/pages/404.php'
];

if (array_key_exists($_SERVER['REQUEST_URI'],$route)){
    require $route[$_SERVER['REQUEST_URI']];
}
else{
    require 'views/pages/404.php';
}
