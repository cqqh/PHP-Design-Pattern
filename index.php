<?php
define('ROOT', __DIR__);

function autoload($class){
//    echo ROOT.DIRECTORY_SEPARATOR.$class.'.php';
    require ROOT.DIRECTORY_SEPARATOR.$class.'.php';
}

spl_autoload_register('autoload');
$Db = lib\Factory::getDb();
$Db->connect();