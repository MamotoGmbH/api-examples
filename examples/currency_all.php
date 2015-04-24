<?php
// include config file
include_once __DIR__ . "/../config.php";

/**
 * get all currencies
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Currency;

$currency = new Currency($config);
// $currency->setRawAnswer(true);
$returnData = $currency->getAll();
echo "Resultset:\n";
print_R($returnData);
