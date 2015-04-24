<?php
// include autoloader
include_once '../vendor/autoload.php';

/**
 * get Merchants by Id
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Merchants;

$id = 20378;

$merchants = new Merchants();
// $merchants->setRawAnswer(true);
$merchants->setId($id);
$returnData = $merchants->get();
echo "Resultset:\n";
print_R($returnData);
