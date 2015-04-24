<?php
error_reporting(E_ALL);
ini_set("display_errors", "1");

require_once '../vendor/autoload.php';

use Mamoto\Api\Authentication;

$config = array(
    "login" => "testclient",
    "password" => "testpass"
);

$process = curl_init(Authentication::BASE_URL . Authentication::URL);
curl_setopt($process, CURLOPT_HEADER, 0);
curl_setopt($process, CURLOPT_USERPWD, $config["login"] . ":" . $config["password"]);
curl_setopt($process, CURLOPT_TIMEOUT, 30);
curl_setopt($process, CURLOPT_POST, 1);
curl_setopt($process, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
$return = curl_exec($process);

if ($return != FALSE) {
    $json_data = json_decode($return, TRUE);
    if (isset($json_data["errors"])) {
        echo "Houston. We have a problem:\n";
        foreach ($json_data["errors"] as $error) {
            echo "Error Code: " . $error["Code"] . "; Message: " . $error["Message"] . "\n";
        }
    } else {
        echo "Your Access Data:\n";
        echo "Token: " . $json_data["access_token"] . "\n";
        echo "Type: " . $json_data["token_type"] . "\n";
        echo "Expires: " . $json_data["expires_in"] . "\n";
    }
} else {
    echo "Houston. We have a problem:\n";
    echo 'Curl-Error: ' . curl_error($process) . "\n";
}
curl_close($process);
