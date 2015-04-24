<?php
// include config file
include_once __DIR__ . "/../config.php";

/**
 * get all Merchants
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Merchants;

$merchants = new Merchants($config);
// $merchants->setRawAnswer(true);
$returnData = $merchants->getAll();
echo "Resultset:\n";
print_R($returnData);
