# Swagger\Client\MazeApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**collectScore**](MazeApi.md#collectScore) | **POST** /api/maze/collectScore | 💰 Collect score from your hand to your bag.
[**enter**](MazeApi.md#enter) | **POST** /api/maze/enter | 🌟 Enter a maze.
[**exitMaze**](MazeApi.md#exitMaze) | **POST** /api/maze/exit | 🚪 Exit the maze.
[**moveDown**](MazeApi.md#moveDown) | **POST** /api/maze/move/down | ⬇ Move down.
[**moveLeft**](MazeApi.md#moveLeft) | **POST** /api/maze/move/left | ⬅ Move left.
[**moveRight**](MazeApi.md#moveRight) | **POST** /api/maze/move/right | ➡ Move right.
[**moveUp**](MazeApi.md#moveUp) | **POST** /api/maze/move/up | ⬆ Move up.
[**possibleActions**](MazeApi.md#possibleActions) | **GET** /api/maze/possibleActions | 👀 Get the list of possible actions, from the tile where you are standing.


# **collectScore**
> \Swagger\Client\Model\PossibleActionsAndCurrentScore collectScore()

💰 Collect score from your hand to your bag.

Remember that when you exit a maze, only score in your bag will carry over and be awarded to your overall player score. Any score left in your hand will be lost.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MazeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->collectScore();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MazeApi->collectScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PossibleActionsAndCurrentScore**](../Model/PossibleActionsAndCurrentScore.md)

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enter**
> \Swagger\Client\Model\PossibleActionsAndCurrentScore enter($maze_name)

🌟 Enter a maze.

Keep in mind that you can only be playing one maze at a time. Invoking this method when you are already in a maze will result in a failure. Also, you can only play the same maze once. If you wish to play the same maze \"multiple times\", you need to request to forget your player data (via the player API).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MazeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$maze_name = "maze_name_example"; // string | What maze do you wish to enter.

try {
    $result = $apiInstance->enter($maze_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MazeApi->enter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maze_name** | **string**| What maze do you wish to enter. | [optional]

### Return type

[**\Swagger\Client\Model\PossibleActionsAndCurrentScore**](../Model/PossibleActionsAndCurrentScore.md)

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exitMaze**
> exitMaze()

🚪 Exit the maze.

Remember that when you exit a maze, only score in your bag will carry over and be awarded to your overall player score. Any score left in your hand will be lost.   Also, remember that you can only play the same maze once, so make sure you have collected as much score as you can.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MazeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->exitMaze();
} catch (Exception $e) {
    echo 'Exception when calling MazeApi->exitMaze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveDown**
> \Swagger\Client\Model\PossibleActionsAndCurrentScore moveDown()

⬇ Move down.

You must have already entered a maze. This method will return 200 even if you could not move in this direction. If there is a \"wall\" in your way and you try to move there.. well, it's gonna hurt, but you will remain in the same place.. which.. technically.. is valid.. 🤷🏻‍

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MazeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->moveDown();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MazeApi->moveDown: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PossibleActionsAndCurrentScore**](../Model/PossibleActionsAndCurrentScore.md)

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveLeft**
> \Swagger\Client\Model\PossibleActionsAndCurrentScore moveLeft()

⬅ Move left.

You must have already entered a maze. This method will return 200 even if you could not move in this direction. If there is a \"wall\" in your way and you try to move there.. well, it's gonna hurt, but you will remain in the same place.. which.. technically.. is valid.. 🤷🏻‍

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MazeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->moveLeft();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MazeApi->moveLeft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PossibleActionsAndCurrentScore**](../Model/PossibleActionsAndCurrentScore.md)

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveRight**
> \Swagger\Client\Model\PossibleActionsAndCurrentScore moveRight()

➡ Move right.

You must have already entered a maze. This method will return 200 even if you could not move in this direction. If there is a \"wall\" in your way and you try to move there.. well, it's gonna hurt, but you will remain in the same place.. which.. technically.. is valid.. 🤷🏻‍

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MazeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->moveRight();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MazeApi->moveRight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PossibleActionsAndCurrentScore**](../Model/PossibleActionsAndCurrentScore.md)

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveUp**
> \Swagger\Client\Model\PossibleActionsAndCurrentScore moveUp()

⬆ Move up.

You must have already entered a maze. This method will return 200 even if you could not move in this direction. If there is a \"wall\" in your way and you try to move there.. well, it's gonna hurt, but you will remain in the same place.. which.. technically.. is valid.. 🤷🏻‍

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MazeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->moveUp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MazeApi->moveUp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PossibleActionsAndCurrentScore**](../Model/PossibleActionsAndCurrentScore.md)

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **possibleActions**
> \Swagger\Client\Model\PossibleActionsAndCurrentScore possibleActions()

👀 Get the list of possible actions, from the tile where you are standing.

You must have already entered a maze. Also, you shouldn't require this method that much, given than any action you perform on the maze will return this same information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MazeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->possibleActions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MazeApi->possibleActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PossibleActionsAndCurrentScore**](../Model/PossibleActionsAndCurrentScore.md)

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

