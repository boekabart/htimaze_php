<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'HTI Thanks You [9fa6]');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$playerApi = new Swagger\Client\Api\PlayerApi(
    new GuzzleHttp\Client(),
    $config
);

$mazesApi = new Swagger\Client\Api\MazesApi(
    new GuzzleHttp\Client(),
    $config
);

try {
	$playerApi->forget();
    $result = $playerApi->register('bassie');
    print_r($result);
    $mazes = $mazesApi->all();
    print_r($mazes);
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), PHP_EOL;
}

?>