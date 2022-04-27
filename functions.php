<?php

function classAutoload($className) {
    $extension =  spl_autoload_extensions();
    require_once (__DIR__ . '/classes/' . $className . $extension);
}

spl_autoload_extensions('.php');
spl_autoload_register('classAutoload');

function moeda($valor)
{
	$valor = number_format($valor,2,",",".");
	return $valor;
}