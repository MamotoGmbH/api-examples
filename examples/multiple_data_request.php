<?php
// include autoloader
include_once '../vendor/autoload.php';

/**
 * get all Articles
 *
 * @author André Marthaler <am@mamoto.net>
 */
use Mamoto\Api\Authentication;
use Mamoto\Api\Currency;
use Mamoto\Api\Sites;

// get own Authentication object
$auth = new Authentication();
// authenticate client
if ($auth->authenticate()) {
    echo "Use OAuth2 Data. Token-Type: " . $auth->getTokenType() . "; Access-Token: " . $auth->getAccessToken() . "\n";
    
    // get object for request
    $currency = new Currency();
    // set authentication which will be used for request data on api
    $currency->setAuthenticationObject($auth);
    // $currency->setRawAnswer(true);
    $returnData = $currency->getAll();
    echo "Resultset:\n";
    print_R($returnData);
    
    // get object for request
    $sites = new Sites();
    // set authentication which will be used for request data on api
    $sites->setAuthenticationObject($auth);
    // $sites->setRawAnswer(true);
    $returnData = $sites->getAll();
    echo "Resultset:\n";
    print_R($returnData);
}
