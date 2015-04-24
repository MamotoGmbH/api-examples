<?php
// include autoloader
include_once '../vendor/autoload.php';

/**
 * get all Articles
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\ClientsReports;

$clients = new ClientsReports();
// $articles->setRawAnswer(true);
$returnData = $clients->getAll();
echo "Resultset:\n";
print_R($returnData);
