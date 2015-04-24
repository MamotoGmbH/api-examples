<?php
// include config file
include_once __DIR__ . "/../config.php";

/**
 * get all Articles with offers
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Articles;

$articles = new Articles($config);
// $articles->setRawAnswer(true);
$returnData = $articles->getAllWithOffers();
echo "Resultset:\n";
print_R($returnData);
