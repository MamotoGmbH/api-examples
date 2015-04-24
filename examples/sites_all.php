<?php
// include config file
include_once __DIR__ . "/../config.php";

/**
 * get all Articles
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Sites;

$sites = new Sites();
// $sites->setRawAnswer(true);
$returnData = $sites->getAll($config);
echo "Resultset:\n";
print_R($returnData);
