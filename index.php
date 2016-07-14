<?php
echo 'test';
// we've writen this code where we need
function __autoload($classname) {
    $filename = $classname .".php";
    include_once($filename);
}

echo 'test Jenkins';

// we've called a class ***
$obj = new myclass();
?>
