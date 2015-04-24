<?php
// include config file
include_once __DIR__ . "/../config.php";

/**
 * get all Articles
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Articles;

$articles = new Articles($config);
// $articles->setRawAnswer(true);
$articles->setEan("400");
$returnData = $articles->search();
echo "Resultset:\n";
print_R($returnData);
