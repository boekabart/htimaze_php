# Swagger\Client\DocsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gRPCCsharpCodeGen**](DocsApi.md#gRPCCsharpCodeGen) | **GET** /docs/codeGen/gRPC/csharp | 📜 Some pointers to having csharp client code generation from a gRPC proto file.
[**gRPCProtoFile**](DocsApi.md#gRPCProtoFile) | **GET** /docs/codeGen/gRPC/proto | 📜 The gRPC proto file for the client code generation.
[**swaggerCsharpCodeGen**](DocsApi.md#swaggerCsharpCodeGen) | **GET** /docs/codeGen/swagger/csharp | 📜 Some pointers to having csharp client code generation from the Swagger/Open API spec.


# **gRPCCsharpCodeGen**
> string gRPCCsharpCodeGen()

📜 Some pointers to having csharp client code generation from a gRPC proto file.

Use these guidelines to create a minimal application that allows you to communicate with our servers.     These guidelines provide automatically generated C# client code, with serialization and de-serialization and a way to authenticate your requests.    Keep in mind this is provided under the \"Works on my machine, YMMV.\"™ age-old agreement. 😀 Enjoy!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->gRPCCsharpCodeGen();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->gRPCCsharpCodeGen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/markdown; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **gRPCProtoFile**
> string gRPCProtoFile()

📜 The gRPC proto file for the client code generation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->gRPCProtoFile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->gRPCProtoFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/protobuf; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **swaggerCsharpCodeGen**
> string swaggerCsharpCodeGen()

📜 Some pointers to having csharp client code generation from the Swagger/Open API spec.

Use these guidelines to create a minimal application that allows you to communicate with our servers.     These guidelines provide automatically generated C# client code, with IntelliSense documentation, serialization and de-serialization and a way to authenticate your requests.    Keep in mind this is provided under the \"Works on my machine, YMMV.\"™ age-old agreement. 😀 Enjoy!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->swaggerCsharpCodeGen();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocsApi->swaggerCsharpCodeGen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[User token](../../README.md#User token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/markdown; charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

