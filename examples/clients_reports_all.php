<?php
// include config file
include_once __DIR__ . "/../config.php";

/**
 * get all Articles
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\ClientsReports;

$clients = new ClientsReports($config);
// $articles->setRawAnswer(true);
$returnData = $clients->getAll();
echo "Resultset:\n";
print_R($returnData);
