<pre>
<?php

include "config.inc.php";
include "functions.php";
include "classes/PedidosBling.php";
include "classes/SituacoesBling.php";


$pedidos = new PedidosBling;
$pedidos->setFilterDate('01/03/2022', '31/03/2022');

$situacao = new Situacao;
$ids = $situacao->getIdsHerdados(array('9'));

$pedidos->setFilterSituacao($ids);
$json = count($pedidos->getOrders('1'));

print_r($json);