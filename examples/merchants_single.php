<?php
// include config file
include_once __DIR__ . "/../config.php";

/**
 * get Merchants by Id
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Merchants;

$id = 20378;

$merchants = new Merchants($config);
// $merchants->setRawAnswer(true);
$merchants->setId($id);
$returnData = $merchants->get();
echo "Resultset:\n";
print_R($returnData);
