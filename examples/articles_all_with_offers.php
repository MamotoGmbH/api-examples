<?php
// include autoloader
include_once '../vendor/autoload.php';

/**
 * get all Articles with offers
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Articles;

$articles = new Articles();
// $articles->setRawAnswer(true);
$returnData = $articles->getAllWithOffers();
echo "Resultset:\n";
print_R($returnData);
