<?php
// include config file
include_once __DIR__ . "/../config.php";

/**
 * get currency by Id
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Currency;

// get currency by id (Id "1" is EURO)
$id = 1;

$currency = new Currency($config);
// $currency->setRawAnswer(true);
$currency->setId($id);
$returnData = $currency->get();
echo "Resultset:\n";
print_R($returnData);
