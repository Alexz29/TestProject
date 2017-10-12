<?php
/**
 * Example
 */

function load($class){
    $class = str_replace('\\', '/', $class);
    require __DIR__ . '/' . $class . '.php';
}

spl_autoload_register('load');

$carrier = new CarrierAdapter(new \carriers\PostOfRussia());
var_dump($carrier->getName(), $carrier->getCurrency(), $carrier->getPriceDelivery(100));