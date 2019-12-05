# Swagger\Client\MazesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**all**](MazesApi.md#all) | **GET** /api/mazes/all | 📜 All the mazes that exist in the game.
[**enter**](MazesApi.md#enter) | **POST** /api/mazes/enter | 🌟 Enter a maze.


# **all**
> \Swagger\Client\Model\MazeInfo[] all()

📜 All the mazes that exist in the game.

Even though you can only play a maze once, this method will return all the mazes. This is not laziness from the server side, this is to make it slightly more \"interesting\", because you need to keep track of the mazes you have already played on your implementation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MazesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->all();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MazesApi->all: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MazeInfo[]**](../Model/MazeInfo.md)

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

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

$apiInstance = new Swagger\Client\Api\MazesApi(
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
    echo 'Exception when calling MazesApi->enter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maze_name** | **string**| What maze do you wish to enter. |

### Return type

[**\Swagger\Client\Model\PossibleActionsAndCurrentScore**](../Model/PossibleActionsAndCurrentScore.md)

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

