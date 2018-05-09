<?php 
spl_autoload_register(function($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

use app\View;

$v = new \src\View();
$v->render();
echo "<br>";
$v = new \app\View();
$v->render();

 ?>