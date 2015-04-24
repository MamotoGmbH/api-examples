<?php
// include autoloader
include_once '../vendor/autoload.php';

/**
 * get all Articles
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Sites;

$sites = new Sites();
// $sites->setRawAnswer(true);
$returnData = $sites->getAll();
echo "Resultset:\n";
print_R($returnData);
