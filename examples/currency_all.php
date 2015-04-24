<?php
// include autoloader
include_once '../vendor/autoload.php';

/**
 * get all currencies
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Currency;

$currency = new Currency();
// $currency->setRawAnswer(true);
$returnData = $currency->getAll();
echo "Resultset:\n";
print_R($returnData);
