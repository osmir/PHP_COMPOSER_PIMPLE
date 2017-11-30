<?php  

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=curso";
$container['user']= "root";
$container['pass']= "";