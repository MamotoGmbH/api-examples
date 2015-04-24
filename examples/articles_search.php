<?php
// include autoloader
include_once '../vendor/autoload.php';

/**
 * get all Articles
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Articles;

$articles = new Articles();
// $articles->setRawAnswer(true);
$articles->setEan("400");
$returnData = $articles->search();
echo "Resultset:\n";
print_R($returnData);
