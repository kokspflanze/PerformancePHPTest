<?php

include __DIR__ . '/../vendor/autoload.php';

use PerformancePHP\ArrayFunction;

ini_set('error_reporting', E_ALL);



$array = new ArrayFunction();
$time = $array->functionCount();

var_dump('functionCount => ' . $time);


$array = new ArrayFunction();
$time = $array->functionSizeOf();

var_dump('functionSizeOf => ' . $time);

$array = new ArrayFunction();
$time = $array->functionCastBool();

var_dump('functionCastBool => ' . $time);

$array = new ArrayFunction();
$time = $array->functionCastNotBool();

var_dump('functionCastNotBool => ' . $time);

$array = new ArrayFunction();
$time = $array->functionBool();

var_dump('functionBool => ' . $time);

$array = new ArrayFunction();
$time = $array->functionNotBool();

var_dump('functionNotBool => ' . $time);

$array = new ArrayFunction();
$time = $array->functionNotEmpty();

var_dump('functionNotEmpty => ' . $time);


$array = new ArrayFunction();
$time = $array->functionEmpty();

var_dump('functionEmpty => ' . $time);
