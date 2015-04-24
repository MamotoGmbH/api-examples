<?php
// include autoloader
include_once '../vendor/autoload.php';

/**
 * get all Articles with all offers
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Articles;

// unique article-id
$id = 130311;

$articles = new Articles();
// $articles->setRawAnswer(true);
$articles->setId($id);
$returnData = $articles->getWithOffers();
echo "Resultset:\n";
print_R($returnData);
