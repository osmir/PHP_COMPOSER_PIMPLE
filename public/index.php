<?php 

require_once "../vendor/autoload.php";
require_once "service.php";
require_once "config.php";
//require_once "ServiceProduct.php";

$list = $container['ServiceProduct']->list();


var_dump($list);