<?php
// include autoloader
include_once '../vendor/autoload.php';

/**
 * get all Merchants
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Merchants;

$merchants = new Merchants();
// $merchants->setRawAnswer(true);
$returnData = $merchants->getAll();
echo "Resultset:\n";
print_R($returnData);
