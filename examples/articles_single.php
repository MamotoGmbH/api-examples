<?php
// include config file
include_once __DIR__ . "/../config.php";

/**
 * get all Articles
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Articles;

// unique article-id
$id = 130311;

$articles = new Articles($config);
// $articles->setRawAnswer(true);
$articles->setId($id);
$returnData = $articles->get();
echo "Resultset:\n";
print_R($returnData);
