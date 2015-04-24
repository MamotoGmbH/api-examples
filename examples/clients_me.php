<?php
// include autoloader
include_once '../vendor/autoload.php';

/**
 * get own client data
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Clients;

$clients = new Clients();
// $clients->setRawAnswer(true);
$returnData = $clients->get();
echo "Resultset:\n";
print_R($returnData);
