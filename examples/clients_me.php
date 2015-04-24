<?php
// include config file
include_once __DIR__ . "/../config.php";

/**
 * get own client data
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Clients;

$clients = new Clients($config);
// $clients->setRawAnswer(true);
$returnData = $clients->get();
echo "Resultset:\n";
print_R($returnData);
