<?php
// include autoloader
include_once '../vendor/autoload.php';

/**
 * get site by defined id
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Sites;

// Amazon.de
$id = 2;

$sites = new Sites();
// $sites->setRawAnswer(true);
$sites->setId($id);
$returnData = $sites->get();
echo "Resultset:\n";
print_R($returnData);
